<?php

namespace App\Http\Livewire\Admin\Class;

use App\Models\Days;
use App\Models\Times;
use Livewire\Component;
use App\Models\Recorded;
use App\Models\Subjects;

class AddRecordedComponent extends Component
{
    public $day;
    public $time;
    public $subject;
    public $link;

    public function addMeeting()
    {
        $recorded = new Recorded();
        $recorded->day = $this->day;
        $recorded->time = $this->time;
        $recorded->subject = $this->subject;
        $recorded->link = $this->link;
        $recorded->save();
        session()->flash('message','Schedule has been added successfully');
    }
    public function render()
    {
        $days = Days::all();
        $times = Times::all();
        $subjects = Subjects::all();
        $recorded = Recorded::all();
        return view('livewire.admin.class.add-recorded-component',['recorded'=>$recorded,'days'=>$days,'times'=>$times,'subjects'=>$subjects])->layout('layouts.base');
    }
}
