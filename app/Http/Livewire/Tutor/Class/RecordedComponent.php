<?php

namespace App\Http\Livewire\Tutor\Class;

use App\Models\Days;
use App\Models\Times;
use Livewire\Component;
use App\Models\Recorded;
use App\Models\Subjects;

class RecordedComponent extends Component
{
    public function render()
    {
        $mondays = Recorded::where('day', "Monday")->get();
        $tuesdays = Recorded::where('day', "Tuesday")->get();
        $wednesdays = Recorded::where('day', "Wednesday")->get();
        $thursdays = Recorded::where('day', "Thursday")->get();
        $fridays = Recorded::where('day', "Friday")->get();
        $saturdays = Recorded::where('day', "Saturday")->get();
        $sundays = Recorded::where('day', "Sunday")->get();
        $recorded = Recorded::where('id','>',0)->get();
        $days = Days::all();
        $times = Times::all();
        $subjects = Subjects::all();
        return view('livewire.tutor.class.recorded-component',[
            'recorded'=>$recorded,
            'days'=>$days,
            'times'=>$times,
            'subjects'=>$subjects,
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
