<header class="h-[70vh] bg-main flex items-center justify-center">
    <div class="bg-white rounded-md p-6 max-w-lg w-full text-sm">
        <div class="text-center mb-2">
            <img src="https://api.iconify.design/material-symbols:check-circle.svg?color=%2320975a" class="m-auto mb-3" width="50" alt="Checkmark icon">
            <h1 class="text-xl font-semibold mb-2">{{ __('messages.order.success.heading') }}</h1>
            <p class="mb-2">{{ __('messages.order.success.para') }}</p>
            <p>OrderID# <strong>{{ $order->checkout_id }}</strong></p>
        </div>
        <div class="bg-gray-100 p-6 rounded-lg border border-gray-200">
            <h2 class="font-semibold mb-2 text-lg">{{ __('messages.order.success.para1') }}</h2>
            <p class="mb-3">{{ __('messages.order.success.para2') }}</p>
            <p>{{ __('messages.order.success.para3') }}</p>
        </div>
    </div>
</header>