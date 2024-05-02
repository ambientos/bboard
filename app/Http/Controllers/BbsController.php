<?php

namespace App\Http\Controllers;

use App\Models\Bb;

class BbsController
{
    public function index() {
        $context = ['bbs' => Bb::latest()->get()];

        return view('index', $context);
    }

    public function detail(Bb $item) {
        return view('detail', ['item' => $item]);
    }
}
