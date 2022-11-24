<?php

namespace App\Http\Livewire\Tutor\Profile;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class TutorProfileComponent extends Component
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
        $tutor = User::find(Auth::user()->id);
        $this->name = $tutor->name;
        $this->email = $tutor->email;
        $this->ic = $tutor->ic;
        $this->age = $tutor->age;
        $this->gender = $tutor->gender;
        $this->phone = $tutor->phone;
        $this->state = $tutor->state;
    }

    public function updateProfile()
    {
        $tutor = User::find(Auth::user()->id);
        $tutor->name = $this->name;
        $tutor->ic = $this->ic;
        $tutor->age = $this->age;
        $tutor->gender = $this->gender;
        $tutor->phone = $this->phone;
        $tutor->state = $this->state;
        $tutor->save();
        session()->flash('message','Profile has been updated successfully');
    }
    public function render()
    {
        $tutor = User::find(Auth::user()->id);
        return view('livewire.tutor.profile.tutor-profile-component',['tutor'=>$tutor])->layout('layouts.base');
    }
}
