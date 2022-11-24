<?php

namespace App\Http\Livewire\Admin\Class;

use App\Models\Days;
use App\Models\User;
use Livewire\Component;
use App\Models\Schedule;
use App\Models\ScheduleItem;
use App\Models\Subjects;
use App\Models\Times;

class AddScheduleComponent extends Component
{
    public $day;
    public $time;
    public $subject;
    public $tutor;

    public function addSchedule()
    {
        $schedule = new Schedule();
        $schedule->day = $this->day;
        $schedule->time = $this->time;
        $schedule->subject = $this->subject;
        $schedule->tutor = $this->tutor;
        $schedule->save();
        session()->flash('message','Schedule has been added successfully');

    }
    public function render()
    {
        $days = Days::all();
        $times = Times::all();
        $subjects = Subjects::all();
        $tutors = User::where('account', "TTR")->get();
        return view('livewire.admin.class.add-schedule-component',['tutors'=>$tutors,'days'=>$days,'times'=>$times,'subjects'=>$subjects])->layout('layouts.base');
    }
}
