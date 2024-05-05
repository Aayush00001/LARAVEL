<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcome extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function print(Request $req)
    {
        print_r($req->all());
    }
}
