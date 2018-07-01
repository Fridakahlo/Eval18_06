<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class RoomsController extends Controller
{
	public function index()
	    {
	       $rooms = \App\Rooms::all(); 
    // we select all the entries of rooms table
 
    	   return view('room-list', compact('rooms'));
    // we return index view of rooms file 
	    }
	public function show($id){

		 $room = \App\Rooms::find($id);

		  return view('room-description', compact('room'));
	}

   
}
