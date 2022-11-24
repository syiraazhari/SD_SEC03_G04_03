<?php

namespace App\Http\Livewire\Admin\Order;

use Livewire\Component;

class OrderPurchaseComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.order.order-purchase-component')->layout('layouts.base');
    }
}
