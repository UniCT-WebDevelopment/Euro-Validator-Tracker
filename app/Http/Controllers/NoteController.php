<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
    public function index() { //show all stored notes in database
        //$notes = Note::all();
        $notes = Note::orderBy('serial')->get();

        $serial = request('serial');
        $value = request('value');
        $zip = request('zip');

        //return view('note', ['notes' => $notes]);
        return view('notes.index', ['serial' => $serial, 'value' => $value, 'zip' => $zip, 'valid' => true]);
    }

    public function show($id){
        $note = Note::where('serial', $id)->get();
        //use the $id variable to query the DB for a record
        //return view('notes.show', ['note' => $note]);
        return view('notes.show', ['note' => $note]);
    }

    public function create() {
        return view('notes.create');
    }

    public function learn(){
        return view('notes.learn');
    }

    public function store() {
        $note = new Note();

        if(null !== request('serial')) {
            $note->serial = request('serial');
        }
        else {
            return redirect('/create')->with('error-msg', 'Error or Incomplete Data');
        }

        if(null !== request('value')) {
            $note->value = request('value');
        }
        else {
            return redirect('/create')->with('error-msg', 'Error or Incomplete Data');
        }
        
        if(null !== request('zip')) {
            $note->zip = request('zip');
        }
        else {
            return redirect('/create')->with('error-msg', 'Error or Incomplete Data');
        }
        
        $result = $note->checkSerial($note->serial);
        if($result == 0 || $result == 1) {
            $note->valid = $result;
        }
        else {
            return redirect('/create')->with('error-msg', 'Error or Incomplete Data');
        }
        $note->save();

        return redirect()->route('id', [$note->serial]);
    }
}
