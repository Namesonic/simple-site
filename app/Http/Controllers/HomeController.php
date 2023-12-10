<?php

namespace App\Http\Controllers;

use SimpleSite\View\View;

class HomeController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function handle(): View
    {
        if (isset($_POST['exception'])) {
            throw new \Exception('User wanted this');
        }

        return view('home')->setTitle('Example', true);
    }
}