<?php

namespace App\Http\Livewire\Tutor\Attendance;

use App\Models\Days;
use App\Models\Times;
use Livewire\Component;
use App\Models\Schedule;
use App\Models\Subjects;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;

class TutorAttendanceComponent extends Component
{
    public $day;
    public $subject;
    public $findAttendance;
    public $studentAttendance;

    public function findAttendance()
    {
        $attendance = Attendance::all();
        $attendance->day = $this->day;
        $attendance->subject = $this->subject;
        if($this->day == $this->day)
        {
            if($this->subject == $this->subject)
            {
                $studentAttendance = Attendance::all('status')->first();
                
            }
        }
        session()->flash('message','Attendance Loaded');
    }
    public function render()
    {
        $days = Days::all();
        $times = Times::all();
        $subjects = Subjects::all();
        
        return view('livewire.tutor.attendance.tutor-attendance-component',[
            'days'=>$days,
            'times'=>$times,
            'subjects'=>$subjects,
            ])->layout('layouts.base');
    }
}
