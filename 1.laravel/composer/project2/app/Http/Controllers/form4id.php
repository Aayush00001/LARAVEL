<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\emp;

class form4id extends Controller
{
    public function index()
    {
        return view('form4id');
    }
    public function print(Request $req)
    {
        $obj=new emp;
        $obj->fname=$req->fname;
        $obj->lname=$req->lname;
        $obj->save();
        echo "hi!!";
    }
}