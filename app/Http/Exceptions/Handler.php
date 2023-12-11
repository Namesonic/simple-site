<?php

namespace App\Http\Exceptions;

use SimpleSite\Http\Exceptions\Handler as SimpleSiteHandler;

class Handler extends SimpleSiteHandler {
    public function handle(\Throwable $e):void {
        // Remove parent call to handle exceptions yourself
        parent::handle($e);
    }
}