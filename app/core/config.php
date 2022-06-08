<?php

/**
 * App Info
 */
define('APP_NAME', 'Udemy App');
define('APP_DESCRIPTION', 'Free and Paid Tutorials');

/**
 * Database config
 */
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    // config for local server
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'udemy_clone_db');
    define('DB_USER', 'root');
    define('DB_PASS', 'Aman@1234');
    define('DB_DRIVER', 'mysql');
    define('APP_ROOT', 'http://localhost/udemy-clone-php/public');
} else {
    // config for live server
    define('DB_HOST', "");
    define('DB_NAME', "");
    define('DB_USER', "");
    define('DB_PASS', "");
    define('DB_DRIVER', 'mysql');
    define('APP_ROOT', 'http://localhost');
}
