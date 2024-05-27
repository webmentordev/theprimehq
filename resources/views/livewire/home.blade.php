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

    <div class="max-w-7xl m-auto py-6 px-4 grid grid-cols-2 gap-6 mb-12">
        <img src="{{ asset('images/products/the-prime-hq-car-towels-features.jpg') }}" class="w-full rounded-lg" title="{{ __('messages.features.feature') }}" alt="{{ __('messages.features.feature') }}">
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

    <div class="max-w-7xl m-auto py-6 px-4 grid grid-cols-2 gap-6 mb-12">
        <div class="py-6 px-4">
            <h1 class="font-bold text-4xl mb-3 pb-4 border-b border-gray-200">{{ __('messages.applications.application') }}</h1>
            <p class="leading-7 mb-4">{{ __('messages.applications.para1') }}</p>
            <p class="leading-7 mb-4">{{ __('messages.applications.para2') }}</p>
        </div>
        <img src="{{ asset('images/products/the-prime-hq-car-towels-reusability-and-durability.png') }}" class="w-full rounded-lg" title="{{ __('messages.applications.application') }}" alt="{{ __('messages.features.application') }}">
    </div>

    <div class="max-w-7xl m-auto py-6 px-4 grid grid-cols-2 gap-6 mb-12">
        <img src="{{ asset('images/products/the-prime-hq-multipurpose-car-cleaning-towel.jpg') }}" class="w-full rounded-lg" title="{{ __('messages.multipurpose.message') }}" alt="{{ __('messages.multipurpose.message') }}">
        <div class="py-6 px-4">
            <h1 class="font-bold text-4xl mb-3 pb-4 border-b border-gray-200">{{ __('messages.multipurpose.message') }}</h1>
            <p class="leading-7 mb-4">{{ __('messages.multipurpose.para') }}</p>
            <ul class="list-disc ml-8">
                <li class="mb-2">{{ __('messages.multipurpose.f1') }}</li>
                <li class="mb-2">{{ __('messages.multipurpose.f2') }}</li>
                <li class="mb-2">{{ __('messages.multipurpose.f3') }}</li>
                <li class="mb-2">{{ __('messages.multipurpose.f4') }}</li>
                <li class="mb-2">{{ __('messages.multipurpose.f5') }}</li>
            </ul>
        </div>
    </div>

    <div class="max-w-7xl m-auto py-6 px-4 grid grid-cols-2 gap-6">
        <div class="py-6 px-4">
            <h1 class="font-bold text-4xl mb-3 pb-4 border-b border-gray-200">{{ __('messages.dimensions.message') }}</h1>
            <p class="leading-7 mb-4">{{ __('messages.dimensions.para1') }}</p>
            <p class="leading-7 mb-4">{{ __('messages.dimensions.para2') }}</p>
            <ul class="list-disc ml-8">
                <li class="mb-2">{{ __('messages.dimensions.f1') }}</li>
                <li class="mb-2">{{ __('messages.dimensions.f2') }}</li>
                <li class="mb-2">{{ __('messages.dimensions.f3') }}</li>
            </ul>
        </div>
        <img src="{{ asset('images/products/the-prime-hq-car-towel-dimension-and-scratch-free.jpg') }}" class="w-full rounded-lg" title="{{ __('messages.dimensions.title') }}" alt="{{ __('messages.dimensions.title') }}">
    </div>
</section>