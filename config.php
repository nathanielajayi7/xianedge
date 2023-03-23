<?php
require 'vendor/autoload.php';

// use MysqliDb;

$db = initDb();

/**
 * Summary of isDebug
 * Checks if the app is in debug mode or live environment
 * @return bool
 */
function isDebug(): bool
{
    return true;
    // return ($_SERVER['SERVER_NAME'] != 'xianedgeltd.com');
}
function initDb(): MysqliDb
{
    // $SQL_PASSWORD = '%ocT$IlXxFS}';
    $SQL_PASSWORD = '';
    $SQL_USERNAME = 'root';
    $SQL_HOST = 'localhost';
    $SQL_DB = 'test';

    if (isDebug()) {
        return new MysqliDb('localhost', $SQL_USERNAME, $SQL_PASSWORD, $SQL_DB);
    }
    return new MysqliDb($SQL_HOST, $SQL_USERNAME, $SQL_PASSWORD, $SQL_DB);
}
?>