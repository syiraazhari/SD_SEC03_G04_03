<?php

namespace App\Http\Livewire\Admin\Class;

use App\Models\Days;
use App\Models\Times;
use App\Models\Meeting;
use Livewire\Component;
use App\Models\Subjects;

class AddMeetingComponent extends Component
{
    public $day;
    public $time;
    public $subject;
    public $link;

    public function addMeeting()
    {
        $meeting = new Meeting();
        $meeting->day = $this->day;
        $meeting->time = $this->time;
        $meeting->subject = $this->subject;
        $meeting->link = $this->link;
        $meeting->save();
        session()->flash('message','Schedule has been added successfully');
    }

    public function render()
    {
        $days = Days::all();
        $times = Times::all();
        $subjects = Subjects::all();
        $meeting = Meeting::all();
        return view('livewire.admin.class.add-meeting-component',['meeting'=>$meeting,'days'=>$days,'times'=>$times,'subjects'=>$subjects])->layout('layouts.base');
    }
}
