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

    <div class="max-w-7xl m-auto py-6 px-4">
        <h1 class="font-bold">{{ __('messages.features') }}</h1>
    </div>

    <div class="max-w-7xl m-auto py-6 px-4">
        <h1 class="font-bold">{{ __('messages.applications') }}</h1>
    </div>

    <div class="max-w-7xl m-auto py-6 px-4">
        <h1 class="font-bold">{{ __('messages.safe') }}</h1>
    </div>
</section>