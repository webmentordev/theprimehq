<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Http\Request;

class Cancel extends Component
{
    public function mount(Request $request, Order $order){
        if (!$request->hasValidSignature()) {
            abort(401);
        }
        if(!$order->is_paid && $order->shipping == 'pending'){
            Order::where('checkout_id', $order->checkout_id)->update([
                'shipping' => 'canceled',
            ]);
        }
    }
    public function render()
    {
        return view('livewire.order.cancel');
    }
}