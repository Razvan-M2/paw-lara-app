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

    function deleteOrEdit(Request $request)
    {
        $id = $request->input('id');
        
        switch($request->input('action')){
            case "Delete":
                $entryModel = Entry::where('id',$id)->delete();
            break;

            case "Edit":
                
            break;
        }

        return redirect()->back();
    }
}
