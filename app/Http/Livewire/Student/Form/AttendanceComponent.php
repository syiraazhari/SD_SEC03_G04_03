<?php

namespace App\Http\Livewire\Student\Form;

use App\Models\Days;
use App\Models\Times;
use Livewire\Component;
use App\Models\Subjects;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;

class AttendanceComponent extends Component
{
    public $day;
    public $time;
    public $subject;
    public $name;
    public $status;

    public function storeAttendance()
    {
        $attendance = new Attendance();
        $attendance->day = $this->day;
        $attendance->time = $this->time;
        $attendance->subject = $this->subject;
        $attendance->name = Auth::user()->name;
        $attendance->status = $this->status;
        $attendance->save();
        session()->flash('message','Attendance has been submit successfully');

    }
    public function render()
    {
        $days = Days::all();
        $times = Times::all();
        $subjects = Subjects::all();
        return view('livewire.student.form.attendance-component',['days'=>$days,'times'=>$times,'subjects'=>$subjects])->layout('layouts.base');
    }
}
