<?php

namespace App\Http\Livewire\Admin\Class;

use App\Models\Meeting;
use App\Models\User;
use Livewire\Component;
use App\Models\Schedule;

class MeetingComponent extends Component
{
    public function render()
    {
        $mondays = Meeting::where('day', "Monday")->get();
        $tuesdays = Meeting::where('day', "Tuesday")->get();
        $wednesdays = Meeting::where('day', "Wednesday")->get();
        $thursdays = Meeting::where('day', "Thursday")->get();
        $fridays = Meeting::where('day', "Friday")->get();
        $saturdays = Meeting::where('day', "Saturday")->get();
        $sundays = Meeting::where('day', "Sunday")->get();
        $meeting = Meeting::all();
        return view('livewire.admin.class.meeting-component',[
            'meeting'=>$meeting,
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
