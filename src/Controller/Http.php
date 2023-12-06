<?php

namespace App\Controller;

class Http {
    public function __construct() {

    }

    public function getURL(): string
    {
        return $_REQUEST['p'];
    }
}