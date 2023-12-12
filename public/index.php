<?php

use App\Http\Exceptions\Handler;
use App\Http\Kernel;
session_start();

require '../vendor/autoload.php';

// Get config file
$config = include_once('../config/app.php');

// Setup exception handler
$handler = new Handler();
set_exception_handler([$handler, 'handle']);

// Boot the Simple Site kernel handler
$kernel = new Kernel;
$kernel->handle();