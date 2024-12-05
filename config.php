<?php
// include db
define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'db_inventaris');
define('BASE_URL', 'http://localhost/framework/sbadmin/');


$db = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);

// include function
include(__DIR__ . '/functions/function_user.php');
include(__DIR__ . '/functions/function_kategori.php');
include(__DIR__ . '/functions/function_login.php');
include(__DIR__ . '/functions/function_register.php');
