<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\xyz;

class welcome extends Controller
{
    public function index()
    {
        $val=xyz::all();
        return view('welcome',compact('val'));
    }
    public function print(Request $req)
    {
        $obj=new xyz;
        $obj->fname=$req->fname;
        $obj->lname=$req->lname;
        $obj->save();
        $val=xyz::all();
        return view('welcome',compact('val'));
    }
}
