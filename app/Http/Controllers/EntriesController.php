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
                $request = new \Illuminate\Http\Request();
                $request->replace(['id' => $id]);
                //$entryModel = Entry::where('id',$id)->get();
                return redirect()->route('book.edit',$request);
            break;
        }

        return redirect()->back();
    }
}
