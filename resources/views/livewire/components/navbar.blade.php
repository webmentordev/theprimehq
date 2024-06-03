<nav class="w-full bg-white py-2 px-4 830px:border-b border-gray-100">
    <div class="flex items-center justify-between max-w-7xl m-auto">
        <div class="flex items-center">
            <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" wire:navigate>
                <img src="{{ asset('images/the-prime-hq-logo.png') }}" width="200" alt="ThePrimeHQ Logo">
            </a>
            <ul class="font-semibold flex items-center 830px:hidden">
                <a class="mx-6 hover:text-primary" href="{{ route('home', ['locale' => app()->getLocale()]) }}" wire:navigate>{{ __('messages.navbar.home') }}</a>
                <a class="mx-6 hover:text-primary" href="{{ route('about', ['locale' => app()->getLocale()]) }}" wire:navigate>{{ __('messages.navbar.about') }}</a>
                <a class="mx-6 hover:text-primary" href="{{ route('purchase', ['locale' => app()->getLocale()]) }}" wire:navigate>{{ __('messages.navbar.purchase') }}</a>
            </ul>
        </div>
        <ul class="font-semibold flex items-center 830px:hidden">
            <ul class="flex items-center">
                <a href="{{ route('home', 'de') }}" class="mr-3" title="Deutsch" wire:navigate>
                    <img src="https://api.iconify.design/twemoji:flag-germany.svg" width="25" alt="German Flag">
                </a>
                <a href="{{ route('home', 'en') }}" class="mr-6" title="English" wire:navigate>
                    <img src="https://api.iconify.design/flagpack:gb-ukm.svg" width="28" alt="UK Flag" class="rounded-md">
                </a>
            </ul>
            <a class="px-4 py-3 bg-dark rounded-lg text-white" href="{{ route('contact', ['locale' => app()->getLocale()]) }}" wire:navigate>{{ __('messages.navbar.contact') }}</a>
        </ul>

        <div x-data="{ open: false }" class="hidden 830px:block">
            <img x-on:click="open = true" class="cursor-pointer" src="https://api.iconify.design/gravity-ui:bars-descending-align-right.svg?color=%23000000" alt="Burger Icon" width="35">
            <div x-show="open" x-cloak class="fixed max-w-[250px] left-0 top-0 h-full w-full bg-white z-[60] shadow-lg p-3" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="transform -translate-x-full"
            x-transition:enter-end="transform translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="transform translate-x-0"
            x-transition:leave-end="transform -translate-x-full">
                <span x-on:click="open = false" class="cursor-pointer flex justify-end mb-6 py-2 bg-dark rounded-lg items-center"><strong class="text-white ml-2">Close</strong><img src="https://api.iconify.design/carbon:close.svg?color=%23ffffff" width="30" alt="Cross"></span>
                <ul class="flex flex-col font-bold">
                    <a class="mb-3 py-2 text-lg hover:text-primary" href="{{ route('home', ['locale' => app()->getLocale()]) }}" wire:navigate>{{ __('messages.navbar.home') }}</a>
                    <a class="mb-3 py-2 text-lg hover:text-primary" href="{{ route('about', ['locale' => app()->getLocale()]) }}" wire:navigate>{{ __('messages.navbar.about') }}</a>
                    <a class="mb-3 py-2 text-lg hover:text-primary" href="{{ route('purchase', ['locale' => app()->getLocale()]) }}" wire:navigate>{{ __('messages.navbar.purchase') }}</a>
                    <a class="mb-3 py-2 text-lg hover:text-primary" href="{{ route('contact', ['locale' => app()->getLocale()]) }}" wire:navigate>{{ __('messages.navbar.contact') }}</a>
                    <a href="{{ route('home', 'de') }}" class="mb-3 py-2 flex items-center" title="Deutsch" wire:navigate>
                        <img src="https://api.iconify.design/twemoji:flag-germany.svg" width="25" alt="German Flag">
                        <span class="ml-3">Deutsch</span>
                    </a>
                    <a href="{{ route('home', 'en') }}" class="mb-3 py-2 flex items-center" title="English" wire:navigate>
                        <img src="https://api.iconify.design/flagpack:gb-ukm.svg" width="28" alt="UK Flag" class="rounded-md">
                        <span class="ml-3">English</span>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</nav>