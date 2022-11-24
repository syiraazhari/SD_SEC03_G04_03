<?php

namespace App\Http\Livewire\Admin\Profile;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AdminProfileComponent extends Component
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
        $admin = User::find(Auth::user()->id);
        $this->name = $admin->name;
        $this->email = $admin->email;
        $this->ic = $admin->ic;
        $this->age = $admin->age;
        $this->gender = $admin->gender;
        $this->phone = $admin->phone;
        $this->state = $admin->state;
    }

    public function updateProfile()
    {
        $admin = User::find(Auth::user()->id);
        $admin->name = $this->name;
        $admin->ic = $this->ic;
        $admin->age = $this->age;
        $admin->gender = $this->gender;
        $admin->phone = $this->phone;
        $admin->state = $this->state;
        $admin->save();
        session()->flash('message','Profile has been updated successfully');
    }
    public function render()
    {
        $admin = User::find(Auth::user()->id);
        return view('livewire.admin.profile.admin-profile-component',['admin'=>$admin])->layout('layouts.base');
    }
}
