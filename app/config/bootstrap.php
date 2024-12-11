<?php

use Dotenv\Dotenv;

require __DIR__ . '/../../vendor/autoload.php';

// Load environment variables from.env file
$dotenv = Dotenv::createImmutable(__DIR__. '/../../');
$dotenv->load();