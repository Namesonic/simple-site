<?php

namespace App\Http\Controllers;

use SimpleSite\View\View;

class IndexController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function handle(): View
    {
        return view()->setTitle('Example', true)->setTemplate('splash');
    }
}