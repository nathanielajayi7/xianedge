<?php
require 'vendor/autoload.php';

// use MysqliDb;

$db = initDb();

/**
 * Summary of isDebug
 * Checks if the app is in debug mode or live environment
 * @return bool
//  */
// function isDebug(): bool
// {
//     // error_log('isDebug: ' . $_SERVER['SERVER_NAME']);
//     return strpos(strtolower($_SERVER['SERVER_NAME']), 'xianedgeltd') === false;
// }
function initDb(): MysqliDb
{
    // $SQL_PASSWORD = '%ocT$IlXxFS}';
    $SQL_PASSWORD = isDebug() ? '' : '%ocT$IlXxFS}';
    $SQL_USERNAME = isDebug() ? 'root' : 'xianedge_user1';
    $SQL_HOST = 'localhost';
    $SQL_DB = isDebug() ? 'test' : 'xianedge_db';

    if (isDebug()) {
        return new MysqliDb('localhost', $SQL_USERNAME, $SQL_PASSWORD, $SQL_DB);
    }
    return new MysqliDb($SQL_HOST, $SQL_USERNAME, $SQL_PASSWORD, $SQL_DB);
}
?>