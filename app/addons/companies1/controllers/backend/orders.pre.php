<?php

if(ACCOUNT_TYPE=='vendor'){
    if(!fn_companies1_check_permissions('o')) return array(CONTROLLER_STATUS_DENIED);
}


