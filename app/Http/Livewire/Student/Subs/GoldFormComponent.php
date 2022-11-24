<?php

namespace App\Http\Livewire\Student\Subs;

use App\Models\Plan;
use App\Models\User;
use Livewire\Component;
use App\Models\Subjects;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;

class GoldFormComponent extends Component
{
    public $user_id;
    public $plan_id;
    public $subject_id;
    public $plans;
    public $subject;
    public $tutor;
    public $status;
    
    public function GoldForm()
    {
        $form = new Subscription();
        $form->user_id = Auth::user()->id;
        $form->plan_id = 2;
        $form->subject_id = $this->subject;
        $form->tutor = $this->tutor;
        $form->status = 'pending';
        $form->save();
        return redirect('https://buy.stripe.com/test_bIY8za9E02j0aIM3cd');
    }
    public function render()
    {
        $student = User::find(Auth::user()->id);
        $gettutor = User::where('account', "TTR")->get();
        $getplan = Plan::all();
        $getsubject = Subjects::all();
        return view('livewire.student.subs.gold-form-component',['student'=>$student,'getplan'=>$getplan,'getsubject'=>$getsubject,'gettutor'=>$gettutor])->layout('layouts.base');
    }
}
