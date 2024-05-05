<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\abc;

class welcome extends Controller
{
    public function index()
    {
        $val=abc::all();
        return view('welcome',compact('val'));
    }
    public function print(Request $req)
    {
        $obj=new abc;
        $obj->fname=$req->fname;
        $obj->lname=$req->lname;
        $obj->save();
        $val=abc::all();
        return view('welcome',compact('val'));
    }
}
