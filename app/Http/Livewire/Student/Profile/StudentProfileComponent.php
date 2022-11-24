<?php

namespace App\Http\Livewire\Student\Profile;

use App\Models\StudentProfile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class StudentProfileComponent extends Component
{
    public $name;
    public $email;
    public $ic;
    public $age;
    public $gender;
    public $phone;
    public $state;

    public function mount()
    {
        $student = User::find(Auth::user()->id);
        $this->name = $student->name;
        $this->email = $student->email;
        $this->ic = $student->ic;
        $this->age = $student->age;
        $this->gender = $student->gender;
        $this->phone = $student->phone;
        $this->state = $student->state;
    }

    public function updateProfile()
    {
        $student = User::find(Auth::user()->id);
        $student->name = $this->name;
        $student->ic = $this->ic;
        $student->age = $this->age;
        $student->gender = $this->gender;
        $student->phone = $this->phone;
        $student->state = $this->state;
        $student->save();
        session()->flash('message','Profile has been updated successfully');
    }
    public function render()
    {
        $student = User::find(Auth::user()->id);
        return view('livewire.student.profile.student-profile-component',['student'=>$student])->layout('layouts.base');
    }
}
