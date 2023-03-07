<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{
    public function index() 
    {
        $schedules = array();
        $events = Event::all();
        $users = User::all()->sortBy('lastname')->sortBy('usertype');

        // dd($users);
        foreach ($events as $event) {
            $schedules[] = [
                'id' => $event->id,
                'name' => $event->name,
                'date_start' => $event->date_start . "T" . $event->time_start,
                'date_end' => $event->date_end . "T" . $event->time_end,
                'backgroundColor' => 'rgba(58,87,232,0.2)',
                'textColor' => 'rgba(58,87,232,1)',
                'borderColor' => 'rgba(58,87,232,1)',
                'extendedProps' => [
                    'date_start' => $event->date_start,
                    'date_end' => $event->date_end,
                    'time_start' => $event->time_start,
                    'time_end' => $event->time_end,
                    'place' => $event->venue,
                    'author_id' => $event->client->id,
                    'user_id' => $event->client->name,                    
                ]
            ];
        };
        // dd($events);
        //return $events;
        return view('calendar', [
            'schedules' => $schedules,
            'events' => $events,
            'users' => $users
        ]);

    }

    public function store(Request $request)
    {
        //dd($request->employees);
        $formFields = $request->validate([
            'author_id' => ['required', 'numeric'],
            'user_id' => ['required', 'numeric'],
            'name' => 'required',
            'date_start' => ['required', 'date'],
            'time_start' => 'required',
            'time_end' => 'required',
            'place' => 'required'
        ]);

        if ($request->date_end === null) {
            $date_end = $request->date_start;
        } else {
            $date_end = $request->date_end;
        }
        $event = Event::create([
            'author_id' => $formFields['author_id'],
            'user_id' => $formFields['user_id'],
            'name' =>  $formFields['name'],
            'date_start' =>   $formFields['date_start'],
            'date_end' =>   $date_end,
            'time_start' =>   $formFields['time_start'],
            'time_end' => $formFields['time_end'],
            'place' => $formFields['place']
        ]);

        return redirect()->route('calendar')->with('success', 'Schedule created succesfully');
    }
}
