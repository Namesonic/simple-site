<?php

use App\Http\Kernel;
use App\View\View;

require '../vendor/autoload.php';
require '../config/app.php';

$kernel = new Kernel;
$kernel->handle();

function view($page, $params = []): View
{
    return new View($page, $params);
}