<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailFrontController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.publicarPropiedad.index');
    }
}
