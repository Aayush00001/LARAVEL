<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\std;

class welcome extends Controller
{
    public function index()
    {
        $val=std::all();
        return view('welcome',compact('val'));
    }
    public function print(Request $req)
    {
        $obj=new std;
        $obj->fname=$req->fname;
        $obj->lname=$req->lname;
        $obj->save();
        $val=std::all();
        return view('welcome',compact('val'));
    }
}
