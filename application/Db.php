<?php
/*
 * DATABASE PARAMS
 * 
 * */
$config = Config::singleton();
$config->set('dbhost', 'Localhost');
$config->set('dbname', 'Database'); //<-- DATABASE NAME
$config->set('dbuser', 'User'); //<-- USER
$config->set('dbpass', 'Pass'); //<-- PASS
$config->set('dbchar', 'utf8' ); //<-- NOT MODIFIED

/*
 * DATABASE TABLES  ** PLEASE NOT MODIFIED **
 * 
 * */
define('ADMIN_SETTINGS', 'admin_settings');
define('PAGES_GENERAL', 'pages_general');
/*
 * SITE NAME PATH
 * */
define('URL_BASE', ' Link do seu site '); //<-- IMPORTANT: place a backslash at the end
?>
