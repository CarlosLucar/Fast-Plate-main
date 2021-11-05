<?php

// Development Connection
// DEFINE('DB_USER', 'root');
// DEFINE('DB_PASSWORD', '');
// DEFINE('DB_HOST', 'localhost');
// DEFINE('DB_NAME', 'register');


// Remote Database Connection 
DEFINE('DB_USER', 'LOLXhYwYcD');
DEFINE('DB_PASSWORD', '3F9QdMp0v0');
DEFINE('DB_HOST', 'remotemysql.com');
DEFINE('DB_NAME', 'LOLXhYwYcD');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Could not connect to MySQL' . mysqli_connect_error());

mysqli_set_charset($dbc, 'utf8');
?>