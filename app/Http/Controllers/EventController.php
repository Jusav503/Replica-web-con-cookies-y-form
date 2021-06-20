<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function list(){
        $events = event::all();
        return view('pages.events', compact('events'));
    }
}
