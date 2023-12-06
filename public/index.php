<?php

use App\Controller\Http;
use App\View\Template;

require '../vendor/autoload.php';
require '../config/app.php';

$http = new Http;
$template = new Template($http->getURL());
echo $template->render();