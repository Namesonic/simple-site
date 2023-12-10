<?php

use App\Http\Kernel;
use SimpleSite\View\View;

session_start();

require '../vendor/autoload.php';
require '../config/app.php';

$kernel = new Kernel;
$kernel->handle();

function view($page, $params = []): View
{
    return new View($page, $params);
}