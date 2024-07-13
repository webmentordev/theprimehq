<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Order;
use Livewire\Component;
use Stripe\StripeClient;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class Purchase extends Component
{
    public $email = "";

    public $quantity = 1, $outOfStock = false, $price = 9.99, $currency = 'EUR';

    public function render()
    {
        return view('livewire.purchase');
    }
    public function randomCheckout()
    {
        $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 20; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }
    public function store()
    {
        if ($this->outOfStock) {
            return;
        }
        $this->checkout();
    }
    private function checkout()
    {
        $this->validate([
            'email' => ['required', 'max:255']
        ]);

        $checkoutID = $this->randomCheckout();
        $stripe = new StripeClient(config('app.stripe'));
        $success = URL::temporarySignedRoute('success', now()->addMinutes(360), ['locale' => App::getLocale(), 'order' => $checkoutID]);
        $cancel = URL::temporarySignedRoute('cancel', now()->addMinutes(360), ['locale' => App::getLocale(), 'order' => $checkoutID]);
        $checkout = $stripe->checkout->sessions->create([
            'success_url' => $success,
            'cancel_url' => $cancel,
            'currency' => $this->currency,
            'billing_address_collection' => 'required',
            'expires_at' => Carbon::now()->addMinutes(360)->timestamp,
            'line_items' => [
                [
                    'price_data' => [
                        "product" => config('app.product'),
                        "currency" => $this->currency,
                        "unit_amount" =>  $this->price * 100,
                    ],
                    'quantity' => $this->quantity
                ],
            ],
            'mode' => 'payment'
        ]);
        Order::create([
            'name' => 'MicroFiber car cleaner',
            'checkout_id' => $checkoutID,
            'email' => $this->email,
            'quantity' => $this->quantity,
            'price' => $this->price * $this->quantity,
            'url' => $checkout['url']
        ]);
        return redirect($checkout['url']);
    }
}
