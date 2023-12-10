<?php

namespace App\Http\Controllers;

use SimpleSite\View\View;

class AboutController extends Controller {

    const COUNTER = 'counter';

    public function __construct() {
        parent::__construct();
    }

    public function handle(): View
    {

        if (isset($_SESSION[self::COUNTER])) {
            $_SESSION[self::COUNTER]++;
        } else {
            $_SESSION[self::COUNTER] = rand(1, 100);
        }

        if (isset($_POST['reset'])) {
            $_SESSION[self::COUNTER] = 0;
        }

        return view('about', ['another' => 'John Henry', 'random' => $_SESSION[self::COUNTER]])->setTitle('About Us', true);
    }
}