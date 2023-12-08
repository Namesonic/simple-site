<?php

namespace App\Http\Exceptions;

class ExceptionHandler {

    public function handle(\Exception $e): void
    {
        print "<b>Caught Exception</b> > " . $e->getMessage();
    }
}