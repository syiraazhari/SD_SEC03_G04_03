<?php

namespace App\Http\Livewire\Admin\Subs;

use Livewire\Component;

class SubscriptionComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.subs.subscription-component')->layout('layouts.base');
    }
}
