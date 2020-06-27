<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function list()
    {
        $events = [
            'Make great php again',
            'Let go again',
            'Laravel conference',
            'Php conference'
        ];
        return view('events.index', compact('events'));
    }
}
