<?php

namespace App\Http\Livewire\Tutor\Class;

use App\Models\Days;
use Livewire\Component;
use App\Models\Schedule;

class TutorScheduleComponent extends Component
{
    public function render()
    {
        $mondays = Schedule::where('day', "Monday")->get();
        $tuesdays = Schedule::where('day', "Tuesday")->get();
        $wednesdays = Schedule::where('day', "Wednesday")->get();
        $thursdays = Schedule::where('day', "Thursday")->get();
        $fridays = Schedule::where('day', "Friday")->get();
        $saturdays = Schedule::where('day', "Saturday")->get();
        $sundays = Schedule::where('day', "Sunday")->get();
        $days = Days::all();
        return view('livewire.tutor.class.tutor-schedule-component',[
            'days'=>$days,
            'mondays'=>$mondays,
            'tuesdays'=>$tuesdays,
            'wednesdays'=>$wednesdays,
            'thursdays'=>$thursdays,
            'fridays'=>$fridays,
            'saturdays'=>$saturdays,
            'sundays'=>$sundays,
        ])->layout('layouts.base');
    }
}
