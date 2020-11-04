<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class EditBookController extends Controller
{
    //
    function editBookView(Request $data){

        $id = $data->input('id');
        $entry =  Entry::where('id',$id)->get();
        //return $entry;
        return view('editBook',['entry'=>$entry]);
        //return $data->input('id');
    }

    function editBook(Request $data){

        $id = $data->input('action');
        $title = $data->input('title');
        $author = $data->input('author');
        $contributor = $data->input('contributor');
        $status = $data->input('status');

        $entry = Entry::where('id',$id)->update(['name' => $title],
                                                ['author' => $author],['status' => $status],['contributor' => $contributor]);


        return redirect()->route('main.show');
    }
}
