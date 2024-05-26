<section class="w-full">
    <div class="max-w-7xl m-auto py-6 px-4 grid grid-cols-2 min-h-[600px]">
        <div class="flex items-center justify-center">
            <div class="h-fit w-full">
                <h1 class="font-bold text-5xl leading-[60px] mb-3">{!! __('messages.heading') !!}</h1>
                <p class="mb-6">{{ __('messages.header') }}</p>
                <a href="{{ route('purchase') }}" wire:navigate class="px-4 py-3 bg-primary rounded-lg w-fit flex items-center text-white font-semibold">
                    {{ __('messages.purchase.button') }}
                    <img src="https://api.iconify.design/gravity-ui:shopping-bag.svg?color=%23ffffff" class="ml-2" width="20" alt="Cart icon">
                </a>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <img src="{{ asset('images/products/the-prime-hq-car-towels.png') }}" title="{{ __('messages.quality') }}" alt="{{ __('messages.quality') }}">
        </div>
    </div>

    <div class="max-w-7xl m-auto py-6 px-4 grid grid-cols-2 gap-6">
        <img src="{{ asset('images/products/the-prime-hq-car-towels-1.png') }}" class="w-full rounded-lg" title="{{ __('messages.features.feature') }}" alt="{{ __('messages.features.feature') }}">
        <div class="py-6 px-4">
            <h1 class="font-bold text-4xl mb-3 pb-4 border-b border-gray-200">{{ __('messages.features.product') }}</h1>
            <p class="leading-7 mb-4">{{ __('messages.features.para') }}</p>
            <ul class="list-disc ml-8">
                <li class="mb-2">{{ __('messages.features.f1') }}</li>
                <li class="mb-2">{{ __('messages.features.f2') }}</li>
                <li class="mb-2">{{ __('messages.features.f3') }}</li>
                <li class="mb-2">{{ __('messages.features.f4') }}</li>
                <li class="mb-2">{{ __('messages.features.f5') }}</li>
                <li class="mb-2">{{ __('messages.features.f6') }}</li>
                <li class="mb-2">{{ __('messages.features.f7') }}</li>
                <li class="mb-2">{{ __('messages.features.f8') }}</li>
            </ul>
        </div>
    </div>

    <div class="max-w-7xl m-auto py-6 px-4 grid grid-cols-2 gap-6">
        <div class="py-6 px-4">
            <h1 class="font-bold text-4xl mb-3 pb-4 border-b border-gray-200">{{ __('messages.applications.application') }}</h1>
            <p class="leading-7 mb-4">{{ __('messages.applications.para1') }}</p>
            <p class="leading-7 mb-4">{{ __('messages.applications.para2') }}</p>
        </div>
        <img src="{{ asset('images/products/the-prime-hq-car-towels-2.png') }}" class="w-full rounded-lg" title="{{ __('messages.features.feature') }}" alt="{{ __('messages.features.feature') }}">
    </div>

    <div class="max-w-7xl m-auto py-6 px-4">
        <h1 class="font-bold">{{ __('messages.safe') }}</h1>
    </div>
</section>