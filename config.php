<?php

if(!defined('IN_SB')){echo 'You should not be here. Only follow links!';die();}

define('DB_HOST', getenv('DB_HOST') ? getenv('DB_HOST') : "localhost");                                    // The host/ip to your SQL server
define('DB_USER', getenv('DB_USER') ? getenv('DB_USER') : "root");                                               // The username to connect with
define('DB_PASS', getenv('DB_PASS') ? getenv('DB_PASS') : "password");                                          // The password
define('DB_NAME', getenv('DB_NAME') ? getenv('DB_NAME') : "sourcebans");                                              // Database name
define('DB_PREFIX', getenv('DB_PREFIX') ? getenv('DB_PREFIX') : "sb");                                      // The table prefix for SourceBans
define('DB_PORT', getenv('DB_PORT') ? getenv('DB_PORT') : 3306);                                                       // The SQL port (Default: 3306)
define('STEAMAPIKEY',getenv('STEAMAPIKEY'));                               // Steam API Key for Shizz
define('SB_WP_URL',getenv('SB_WP_URL'));                                    //URL of SourceBans Site

if(getenv('DEVELOPER_MODE')){
    define('DEVELOPER_MODE', true);                      // Use if you want to show debugmessages
}
if(getenv('SB_MEM')){
    define('SB_MEM', getenv('SB_MEM'));                             // Override php memory limit, if isn't enough (Banlist is just a blank page)
}

?>
