<?php

namespace App\Http\Livewire\Admin\Class;

use App\Models\Days;
use Livewire\Component;
use App\Models\Recorded;

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
        $recorded = Recorded::all();
        $days = Days::all();
        return view('livewire.admin.class.recorded-component',[
            'days'=>$days,
            'recorded'=>$recorded,
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
