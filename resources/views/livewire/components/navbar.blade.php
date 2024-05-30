<nav class="w-full bg-white py-2 px-4">
    <div class="flex items-center justify-between max-w-7xl m-auto">
        <ul class="font-semibold flex items-center">
            <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" wire:navigate>
                <img src="{{ asset('images/the-prime-hq-logo.png') }}" width="200" alt="ThePrimeHQ Logo">
            </a>
            <a class="mx-6 hover:text-primary" href="{{ route('home', ['locale' => app()->getLocale()]) }}" wire:navigate>{{ __('messages.navbar.home') }}</a>
            <a class="mx-6 hover:text-primary" href="{{ route('about', ['locale' => app()->getLocale()]) }}" wire:navigate>{{ __('messages.navbar.about') }}</a>
            <a class="mx-6 hover:text-primary" href="{{ route('purchase', ['locale' => app()->getLocale()]) }}" wire:navigate>{{ __('messages.navbar.purchase') }}</a>
        </ul>
        <ul class="font-semibold flex items-center">
            <ul class="flex items-center">
                <a href="{{ route('home', 'de') }}" class="mr-3" title="Deutsch" wire:navigate>
                    <img src="https://api.iconify.design/twemoji:flag-germany.svg" width="25" alt="">
                </a>
                <a href="{{ route('home', 'en') }}" class="mr-6" title="English" wire:navigate>
                    <img src="https://api.iconify.design/flagpack:gb-ukm.svg" width="28" alt="UK Flag" class="rounded-md">
                </a>
            </ul>
            <a class="px-4 py-3 bg-dark rounded-lg text-white" href="{{ route('contact', ['locale' => app()->getLocale()]) }}" wire:navigate>{{ __('messages.navbar.contact') }}</a>
        </ul>
    </div>
</nav>