<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ayush;

class welcome extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function print(Request $req)
    {
        $obj=new ayush;
        $obj->fname=$req->fname;
        $obj->lname=$req->lname;
        $obj->save();
        echo "hi";
    }
}
