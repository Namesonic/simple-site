<?php

namespace App\Http\Controllers;

use App\View\Template;

class AboutController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function handle(): Template
    {
        return new Template('about', ['another' => 'John Henry']);
    }
}