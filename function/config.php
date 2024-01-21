<?php
require('json.php');
function isConfig () {
    if (file_exists($_SERVER['DOCUMENT_ROOT'].'/system/config/database.php')) {
        include($_SERVER['DOCUMENT_ROOT'].'/system/config/database.php');
        $msg['database'] = $database;
        $msg['database_username'] = $database_username;
        $msg['database_password'] = $database_password;
        $msg['host'] = $host;
        return $msg;
    } else {
        include($_SERVER['DOCUMENT_ROOT'].'/system/default_config/error.php');
        refuse(500,$msg);
    }
}
?>