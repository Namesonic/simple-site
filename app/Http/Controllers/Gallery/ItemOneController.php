<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;

class ItemOneController extends Controller {

    public function handle(): \SimpleSite\View\View
    {
        return view('gallery/item-one');
    }
}