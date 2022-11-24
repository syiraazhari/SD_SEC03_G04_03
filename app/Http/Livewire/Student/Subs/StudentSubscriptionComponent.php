<?php

namespace App\Http\Livewire\Student\Subs;

use App\Models\User;
use Livewire\Component;

class StudentSubscriptionComponent extends Component
{
    public function render()
    {
        $hasSubs = User::all('plan');
        return view('livewire.student.subs.student-subscription-component',['hasSubs'=>$hasSubs])->layout('layouts.base');
    }
}
