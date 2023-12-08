<?php

use App\Http\Kernel;
use App\View\Template;

require '../vendor/autoload.php';
require '../config/app.php';

$kernel = new Kernel;
$kernel->handle();

function view($page, $params = []): Template
{
    return new Template($page, $params);
}