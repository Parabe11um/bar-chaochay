<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // <--- обязательно

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $events = Event::where('is_active', true)
            ->orderBy('event_date', 'desc')
            ->get();

        return view('home', compact('events'));
    }
}
