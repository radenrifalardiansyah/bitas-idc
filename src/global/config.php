<?php
// config.php - Global Configuration File

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'bitas_idc');
define('DB_USER', 'root');
define('DB_PASS', '');

// API Configuration
define('API_BASE_URL', 'https://api.bitas-idc.com/v1/');
define('API_KEY', 'your_api_key_here');

// Other Global Settings
define('SITE_NAME', 'BITAS - Bintang Talenta Scientific');
define('SITE_URL', 'http://localhost/bitas-idc/src/');

// Timezone
date_default_timezone_set('Asia/Jakarta');

// Error Reporting (set to false in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include other config files if needed
// require_once 'database.php';
// require_once 'api.php';
?>