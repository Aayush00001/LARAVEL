<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form3i extends Controller
{
    public function index()
    {
        return view('form3i');
    }
    public function print(Request $req)
    {
        print_r($req->all());
    }
}
