<?php

namespace App\Http\Livewire;

use App\Models\Plan;
use App\Models\User;
use Livewire\Component;
use App\Models\Subjects;
use App\Models\Announcement;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeComponent extends Component
{

    public $plans;
    public $subject;

    public function render()
    {
        
        $announcement = Announcement::where('status', "active")->get();
        $subject = Subjects::all();
        $studentcount = User::where('account', "STD")->count();
        $tutorcount = User::where('account', "TTR")->count();
        $subjectcount = Subjects::count();
        $plans = Plan::where('id', 1)->get();
        return view('livewire.home-component',[
            'plans'=> $plans,
            'announcement'=>$announcement,
            'subject'=>$subject,
            'studentcount'=>$studentcount,
            'tutorcount'=>$tutorcount,
            'subjectcount'=>$subjectcount,
            'plans'=>$plans
            ])->layout('layouts.base');
    }
}
