<?php

namespace App\Http\Livewire;


use Livewire\Component;

class ChangePasswordComponent extends Component
{
    public function render()
    {
        return view('livewire.change-password-component')->layout('layouts.base');
    }
}
