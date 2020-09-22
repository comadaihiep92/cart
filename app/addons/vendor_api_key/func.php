<?php

use Tygh\Api;
use Tygh\Registry;

define('VENDOR_API_KEY_FILE_PATH', Registry::get('config.dir.root').'/var/vendor_api_key_data/key');

require_once(Registry::get('config.dir.root').'/app/addons/vendor_api_key/sodium_compat-master/autoload.php');


function fn_vendor_api_key_safeEncrypt(string $message, string $key): string
{
    if (mb_strlen($key, '8bit') !== SODIUM_CRYPTO_SECRETBOX_KEYBYTES) {
        throw new RangeException('Key is not the correct size (must be 32 bytes).');
    }
    $nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

    $cipher = base64_encode(
        $nonce.
        sodium_crypto_secretbox(
            $message,
            $nonce,
            $key
        )
    );
    //sodium_memzero($message);
    //sodium_memzero($key);
    return $cipher;
}

function fn_vendor_api_key_safeDecrypt(string $encrypted, string $key): string
{   
    $decoded = base64_decode($encrypted);
    $nonce = mb_substr($decoded, 0, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, '8bit');
    $ciphertext = mb_substr($decoded, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, null, '8bit');

    $plain = sodium_crypto_secretbox_open(
        $ciphertext,
        $nonce,
        $key
    );
    if (!is_string($plain)) {
        throw new Exception('Invalid MAC');
    }
    //sodium_memzero($ciphertext);
    //sodium_memzero($key);
    return $plain;
}

function fn_vendor_api_key_encrypt($api_key){
    
    // try to get encryption key
    if(file_exists(VENDOR_API_KEY_FILE_PATH) && filesize(VENDOR_API_KEY_FILE_PATH)>0){
        $encryption_key=hex2bin(file_get_contents(VENDOR_API_KEY_FILE_PATH));
    }else{ // generate new encryption key & save to file
        $encryption_key=random_bytes(SODIUM_CRYPTO_SECRETBOX_KEYBYTES);
        file_put_contents(VENDOR_API_KEY_FILE_PATH, bin2hex($encryption_key));
    }
    
    return fn_vendor_api_key_safeEncrypt($api_key, $encryption_key);
    
}

function fn_vendor_api_key_decrypt($api_key_encrypted){
    
    // try to get encryption key
    if(file_exists(VENDOR_API_KEY_FILE_PATH) && filesize(VENDOR_API_KEY_FILE_PATH)>0){
        $encryption_key=hex2bin(file_get_contents(VENDOR_API_KEY_FILE_PATH));
    }else{ 
        return false;
    }
    
    return fn_vendor_api_key_safeDecrypt($api_key_encrypted, $encryption_key);
    
}

function fn_vendor_api_key_update_user_pre($user_id, &$user_data, $auth, $ship_to_another, $notify_user){
    // make API enabling mandatory for vendors on updating profile
    if((isset($_REQUEST['user_type']) && $_REQUEST['user_type']=='V') && $user_id>0){
        // check if API key is needs to be filled
        $api_status_old = (bool) db_get_field("SELECT api_key FROM ?:vendor_api_keys WHERE user_id = ?i", $user_id);
        if(!$api_status_old && empty($user_data['raw_api_key'])){
            $raw_api_key=trim(Api::generateKey());
            // save API key in an encrypted state to database table
            $encrypted_api_key=fn_vendor_api_key_encrypt($raw_api_key);
            db_query('REPLACE INTO ?:vendor_api_keys (user_id, api_key) VALUES (?i, ?s)', $user_id, $encrypted_api_key);
            // set API key to pass to feathure processing
            $user_data['raw_api_key']=$raw_api_key;
        }elseif(!empty($user_data['raw_api_key'])){
            // save pre-generated in ACP vendor's API key
            $encrypted_api_key=fn_vendor_api_key_encrypt($user_data['raw_api_key']);
            db_query('REPLACE INTO ?:vendor_api_keys (user_id, api_key) VALUES (?i, ?s)', $user_id, $encrypted_api_key);
        }
    }
     
}

function fn_vendor_api_key_update_profile($action, $user_data, $current_user_data){
    
    if(isset($_REQUEST['user_type']) && $_REQUEST['user_type']=='V')
        $user_type="V";
    else
        $user_type=$user_data['user_type'];
    
    // make API enabling mandatory for vendors on adding user
    if($user_type=='V' && $action=='add' && $user_data['user_id']>0){
        // generate API key and save it to database tables
        $raw_api_key = trim(Api::generateKey());
        // save API key in an encrypted state to database table
        $encrypted_api_key = fn_vendor_api_key_encrypt($raw_api_key);
        db_query('REPLACE INTO ?:vendor_api_keys (user_id, api_key) VALUES (?i, ?s)', $user_data['user_id'], $encrypted_api_key);
        // save API key as a hash for current user_id
        $hash_api_key=fn_generate_api_key_hash($raw_api_key);
        db_query("UPDATE ?:users SET api_key = ?s WHERE user_id = ?i AND user_type='V'", $hash_api_key, $user_data['user_id']);
    }

}

function fn_vendor_api_key_get($email, $password){
    
    if(empty($email) || empty($password)) return '';
    
    $user_data=db_get_row("SELECT user_id, password, salt FROM ?:users WHERE email = ?s AND user_type='V'", $email);
    if(empty($user_data)){
        return '';
    }else{ // check password
        if(fn_generate_salted_password($password, $user_data['salt']) == $user_data['password']){
            // get API key
            $encrypted_api_key=db_get_field("SELECT api_key FROM ?:vendor_api_keys WHERE user_id = ?i", $user_data['user_id']);
            if(!empty($encrypted_api_key)){
                // decrypt & return
                $decrypted_api_key=fn_vendor_api_key_decrypt($encrypted_api_key);
                if($decrypted_api_key!==false) return $decrypted_api_key;
                return '';
            }else{
                return '';
            }
        }else{
            return '';
        }
    }
    
    
}

function fn_vendor_api_key_get_by_otp($phone, $otp_password){
    
    $phone=fn_companies1_check_phone($phone);
    if($phone===false) return '';
    
    if(!is_numeric($otp_password)) return '';
    
    // TODO: check OTP
    
    // get user_id by phone
    $user_id=db_get_field("SELECT user_id FROM ?:users WHERE phone = ?s AND user_type='V'", $phone);
    if(empty($user_id)) return '';
    
    // get API key
    $encrypted_api_key=db_get_field("SELECT api_key FROM ?:vendor_api_keys WHERE user_id = ?i", $user_id);
    if(!empty($encrypted_api_key)){
        // decrypt & return
        $decrypted_api_key=fn_vendor_api_key_decrypt($encrypted_api_key);
        if($decrypted_api_key!==false) return $decrypted_api_key;
        return '';
    }else{
        return '';
    }
    
}