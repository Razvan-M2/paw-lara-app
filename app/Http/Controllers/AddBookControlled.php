<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class AddBookControlled extends Controller
{
    function show()
    {
        return view('addBook');
    }

    function addBookSubmit(Request $request)
    {
        $title = $request->input('title');
        $author = $request->input('author');
        $contributor = $request->input('contributor');
        $status = $request->input('status');
        
        $request->validate([
            'title' => 'required',
            'author' => 'required'
        ]);

        if(empty($contributor)){
            $contributor = "Anon";
        }


        $entry = Entry::where([ ['author',$author],
                                ['name',$title]
                                ])->get();
        if(empty($entry[0])){
            $entryModel = new Entry;
            $entryModel->name =  $title;
            $entryModel->author = $author;
            $entryModel->status = $status;
            $entryModel->contributor = $contributor;
            $entryModel->save();

            $entryModel->refresh();
            //return "No value found, good!";
            return redirect()->route('main.show');
        } else {
            return "Book already in repository!";
        }
    }
}
