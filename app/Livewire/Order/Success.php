<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Http\Request;

class Success extends Component
{
    public $order;
    public function mount(Request $request, Order $order){
        if (!$request->hasValidSignature()) {
            abort(401);
        }
        if(!$order->is_paid){
            Order::where('checkout_id', $order->checkout_id)->update([
                'is_paid' => true
            ]);
        }
        $this->order = $order;
    }

    public function render()
    {
        return view('livewire.order.success');
    }
}
