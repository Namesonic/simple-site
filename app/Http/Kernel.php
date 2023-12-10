<?php
namespace App\Http;

use SimpleSite\Kernel as SimpleSiteKernel;

class Kernel extends SimpleSiteKernel {
    public function __construct()
    {
        parent::__construct(__NAMESPACE__);
    }
}