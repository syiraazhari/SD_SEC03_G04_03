<?php

namespace App\Http\Livewire\Student\Tutor;

use App\Models\User;
use Livewire\Component;

class TutorComponent extends Component
{
    public function render()
    {
        $tutor = User::where('account', "TTR")->get();
        return view('livewire.student.tutor.tutor-component',['tutor'=>$tutor])->layout('layouts.base');
    }
}
