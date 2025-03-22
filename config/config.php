<?php
// Database configuration (if needed)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'zakat_calculator');

// Application constants
define('ZAKAT_RATE', 0.025); // 2.5%
define('GOLD_NISAB', 85); // 85 grams of gold
define('SILVER_NISAB', 595); // 595 grams of silver

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Time zone
date_default_timezone_set('Asia/Dhaka');