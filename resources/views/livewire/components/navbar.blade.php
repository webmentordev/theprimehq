<nav class="w-full bg-white py-2 px-4">
    <div class="flex items-center justify-between max-w-7xl m-auto">
        <a href="{{ route('home') }}" wire:navigate>
            <img src="{{ asset('images/the-prime-hq-logo.png') }}" width="200" alt="ThePrimeHQ Logo">
        </a>
        <ul class="font-semibold text-sm">
            <a class="mx-6" href="{{ route('home') }}" wire:navigate>{{ __('messages.navbar.home') }}</a>
            <a class="mx-6" href="{{ route('about') }}" wire:navigate>{{ __('messages.navbar.about') }}</a>
            <a class="px-4 py-3 bg-dark rounded-lg text-white" href="{{ route('contact') }}" wire:navigate>{{ __('messages.navbar.contact') }}</a>
        </ul>
    </div>
</nav>