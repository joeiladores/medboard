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

        foreach ($events as $event) {

            $schedules[] = [
                'id' => $event->id,
                'title' => $event->name,
                'start' => $event->date_start . "T" . $event->time_start,
                'end' => $event->date_end . "T" . $event->time_end,
                'backgroundColor' => 'rgba(58,87,232,0.2)',
                'textColor' => 'rgba(58,87,232,1)',
                'borderColor' => 'rgba(58,87,232,1)',
                'extendedProps' => [
                    'date_start' => $event->date_start,
                    'date_end' => $event->date_end,
                    'time_start' => $event->time_start,
                    'time_end' => $event->time_end,
                    'place' => $event->place,
                    'author_id' => $event->author_id, 
                    'user_id' => $event->user_id,
                    'user_name' => $event->user->lastname . ', ' . $event->user->firstname
                ]
            ];
        };
        // dd($schedules);
        //return $events;
        return view('calendar', compact('schedules', 'users'));

    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
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
        } 
        else {
            $date_end = $request->date_end;
        }

        $event = Event::create([
            'author_id' => $request->author_id,
            'user_id' => $request->user_id,
            'name' =>  $request->name,
            'date_start' =>   $request->date_start,
            'date_end' =>   $date_end,
            'time_start' =>   $request->time_start,
            'time_end' => $request->time_end,
            'place' => $request->place
        ]);

        // dd($event);

        if($event) {
            return redirect()->route('calendar')->with('success', 'Schedule created succesfully');
        }
        else {
            return redirect()->back()->with('error', 'Add New Schedule Failed!');
        }

    }
}
