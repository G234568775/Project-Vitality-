<?php

$requestUri = $_SERVER['REQUEST_URI'];

$requestUri = $requestUri === '/' ? 'index' : $requestUri;

// Get the file path from the URI
$filePath = dirname(__DIR__).DIRECTORY_SEPARATOR.$requestUri.'.php';

// require libraries
require dirname(__DIR__).DIRECTORY_SEPARATOR.'helpers/view.php';
require dirname(__DIR__).DIRECTORY_SEPARATOR.'lib/Database.php';
require dirname(__DIR__).DIRECTORY_SEPARATOR.'lib/Session.php';
require dirname(__DIR__).DIRECTORY_SEPARATOR.'lib/Response.php';
require dirname(__DIR__).DIRECTORY_SEPARATOR.'lib/Authentication.php';
require dirname(__DIR__).DIRECTORY_SEPARATOR.'lib/Validator.php';

// Check if the file exists
if (file_exists($filePath) && !is_dir($filePath)) {
    // Serve the file
    require_once $filePath;
} else {
    // File not found
    http_response_code(404);
    require dirname($filePath).'/404.php';
}

Session::unsetFlash();
