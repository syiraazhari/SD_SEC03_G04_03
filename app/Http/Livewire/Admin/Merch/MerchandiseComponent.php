<?php

namespace App\Http\Livewire\Admin\Merch;

use Livewire\Component;

class MerchandiseComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.merch.merchandise-component')->layout('layouts.base');
    }
}
