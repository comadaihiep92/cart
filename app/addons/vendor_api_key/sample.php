<?php

$unencrypted_api_key=fn_vendor_api_key_get('email@server.com', 'password123');

// OR

$unencrypted_api_key=fn_vendor_api_key_get_by_otp('+910123456789', '123456');