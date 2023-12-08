<?php

namespace App\Http\Controllers;

use App\View\Template;

class HomeController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function handle(): Template
    {
        return new Template('home');
    }
}