<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemControlller extends Controller
{
    function show(){
        return view('pages.items');
    }
    function create(){
        return view('pages.addItem');
    }
}
