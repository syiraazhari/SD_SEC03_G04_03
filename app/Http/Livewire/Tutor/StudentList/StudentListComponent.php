<?php

namespace App\Http\Livewire\Tutor\StudentList;

use App\Models\User;
use Livewire\Component;

class StudentListComponent extends Component
{
    public function render()
    {
        $studentList = User::where('account', "STD")->get();
        return view('livewire.tutor.student-list.student-list-component',['studentList'=>$studentList])->layout('layouts.base');
    }
}
