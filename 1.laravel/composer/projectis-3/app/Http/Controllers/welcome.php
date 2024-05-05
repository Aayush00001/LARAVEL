<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pqr;

class welcome extends Controller
{
    public function index()
    {
        $val=pqr::all();
        return view('welcome',compact('val'));
    }
    public function print(Request $req)
    {
        $obj=new pqr;
        $obj->fname=$req->fname;
        $obj->lname=$req->lname;
        $obj->save();
        $val=pqr::all();
        return view('welcome',compact('val'));
    }
}
