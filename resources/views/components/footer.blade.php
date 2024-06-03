<footer class="w-full bg-dark">
    <div class="max-w-7xl m-auto py-12 px-4 grid grid-cols-4 gap-6 border-b border-light 1000px:grid-cols-3 700px:grid-cols-2 530px:grid-cols-1">
        <img src="{{ asset('images/the-prime-hq-logo-white.png') }}" width="200" alt="ThePrimeHQ Logo">
        <div>
            <h3 class="text-2xl text-primary mb-5 font-bold">{{ __('messages.footer.txt1') }}</h3>
            <ul class="flex flex-col text-gray-100">
                <a class="mb-3 hover:text-primary hover:ml-4" href="/">{{ __('messages.footer.terms') }}</a>
                <a class="mb-3 hover:text-primary hover:ml-4" href="/">{{ __('messages.footer.conditions') }}</a>
                <a class="mb-3 hover:text-primary hover:ml-4" href="/">{{ __('messages.footer.policy') }}</a>
                <a class="hover:text-primary hover:ml-4" href="/">{{ __('messages.footer.return') }}</a>
            </ul>
        </div>
        <div>
            <h3 class="text-2xl text-primary mb-5 font-bold">{{ __('messages.footer.txt2') }}</h3>
            <ul class="flex flex-col text-gray-100">
                <a class="mb-3 hover:text-primary hover:ml-4" href="/">{{ __('messages.footer.home') }}</a>
                <a class="mb-3 hover:text-primary hover:ml-4" href="/">{{ __('messages.footer.about') }}</a>
                <a class="mb-3 hover:text-primary hover:ml-4" href="/">{{ __('messages.footer.purchase') }}</a>
                <a class="hover:text-primary hover:ml-4" href="/">{{ __('messages.footer.contact') }}</a>
            </ul>
        </div>
        <div>
            <h3 class="text-2xl text-primary mb-5 font-bold">{{ __('messages.footer.contact') }}</h3>
            <ul class="flex flex-col text-gray-100">
                <li class="mb-3">contact(at)theprimehq.com</li>
                <li>+44 746 5614825</li>
            </ul>
        </div>
    </div>
    <p class="text-center py-8 text-white">{!! __('messages.footer.copyright') !!}</p>
</footer>