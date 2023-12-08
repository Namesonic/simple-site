<?php

use App\Http\Kernel;
use App\View\Template;

require '../vendor/autoload.php';
require '../config/app.php';

$kernel = new Kernel;
$kernel->handle();