<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'Onyimatics');
define('DB_PASS', '1234567');
define('DB_NAME', 'php_dev');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connectiion
if ($conn->connect_error) {
    die('Connectionn Failed ' . $conn->connect_error);
}

echo 'Connected successfully';
