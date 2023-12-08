<?php

namespace App\Http\Controllers;

use App\View\View;

class AboutController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function handle(): View
    {
        return view('about', ['another' => 'John Henry', 'random' => rand(1, 100)]);
    }
}