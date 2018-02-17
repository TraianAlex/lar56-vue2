<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GibberishController extends Controller
{

    /**
     * GibberishController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('gibberish.index');
    }
}
