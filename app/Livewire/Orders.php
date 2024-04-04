<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class Orders extends Component
{

    public $title = 'Listado de Pedidos';

    public function render()
    {
        $orders = Order::orderBy('id', 'desc')->get();

        return view('livewire.orders', compact('orders'));
    }
}
