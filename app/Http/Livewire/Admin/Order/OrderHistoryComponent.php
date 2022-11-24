<?php

namespace App\Http\Livewire\Admin\Order;

use Livewire\Component;

class OrderHistoryComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.order.order-history-component')->layout('layouts.base');
    }
}
