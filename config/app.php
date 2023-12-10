<?php

use App\Http\Exceptions\Handler;

const SITE_NAME = 'SimpleSite';
const SITE_DESCRIPTION = 'Small (m)VC PHP Framework';

// Setup exception handler
$handler = new Handler();
set_exception_handler([$handler, 'handle']);
