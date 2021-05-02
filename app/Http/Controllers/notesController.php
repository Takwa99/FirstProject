<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note ; //trait 
class notesController extends Controller
{
    //
    public function index()
    {
       $notes =  Note::all();
         return view('notes.index', ['notes'=>$notes]);
        //return view('notes.index')->with('notes',$notes);
       //return view('notes', compact('notes'));
    }
    public function show($note){
      
        return view('notes.show')->with('note',Note::find($note));
    }
}
