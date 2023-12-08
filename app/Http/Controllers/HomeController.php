<?php

namespace App\Http\Controllers;

use App\View\View;

class HomeController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function handle(): View
    {
        return view('home')->setTitle('Example', true);
    }
}