<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Tea;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $events = Event::where('is_active', true)
            ->orderBy('event_date', 'desc')
            ->get();

        $teas = Tea::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('home', compact('events', 'teas'));
    }
}
