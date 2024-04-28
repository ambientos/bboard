<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class BbsController
{
    public function index() {
        return response('Default index action')
            ->header('Content-Type', 'text/plain');
    }
}
