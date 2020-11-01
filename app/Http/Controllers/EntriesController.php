<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class EntriesController extends Controller
{
    //
    function show()
    {
        $entries =  Entry::all();
        return view('welcome',['entries'=>$entries]);
        //return view('welcome');
    }
}
