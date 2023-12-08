<?php

use App\Http\Exceptions\ExceptionHandler;

ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);

const BASE_PATH = __DIR__;

$handler = new ExceptionHandler();
set_exception_handler([$handler, 'handle']);

const SITE_NAME = 'SimpleSite';
const SITE_DESCRIPTION = 'Small (m)VC PHP Framework';

