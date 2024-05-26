<section class="h-[85vh] w-full py-12 px-4">
    <div class="max-w-5xl m-auto">
        <h1 class="text-3xl mb-2 font-bold">{{ __('messages.contact.header') }}</h1>
        <p class="mb-6">{{ __('messages.contact.text') }}</p>
        <div class="grid grid-cols-2 gap-6">
            <form wire:submit='createMessage' method="post" class="w-full">
                @session('success')
                    <x-success message="{{ $value }}" />
                @endsession
                <div class="w-full mb-3">
                    <x-input-label for="name" :value="__('messages.form.fullname')" />
                    <x-input id="name" type="text" wire:model='name' />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="w-full mb-3">
                    <x-input-label for="email" :value="__('messages.form.email')" />
                    <x-input id="email" type="email" wire:model='email' />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="w-full mb-3">
                    <x-input-label for="subject" :value="__('messages.form.subject')" />
                    <x-input id="subject" type="text" wire:model='subject' />
                    <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                </div>
                <div class="w-full mb-3">
                    <x-input-label for="message" :value="__('messages.form.message')" />
                    <x-text-area id="message" wire:model='message' />
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                </div>
                <div class="flex flex-col">
                    <div class="flex items-center mb-1">
                        <p class="text-center">{{ __('messages.contact.verify', [ 'first' => $first,  'second' => $last]) }}</p>
                        <x-input id="number" type="number" wire:model='answer' class="max-w-[60px] py-1 px-2 ml-2 mb-0" />
                    </div>
                    <x-input-error :messages="$errors->get('answer')" class="mt-2" />
                </div>
                <x-button class="mt-3">
                    {{ __('messages.send') }}
                </x-button>
            </form>
            <div class="w-full">
                <div class="w-full p-6 py-8 rounded-xl bg-gray-100">
                    <div class="flex mb-8">
                        <div class="w-[55px] h-[50px] rounded-full flex items-center p-2 justify-center bg-primary">
                            <img src="https://api.iconify.design/material-symbols-light:map-sharp.svg?color=%23ffffff" width="30" alt="Address logo">
                        </div>
                        <div class="flex flex-col ml-3">
                            <h2 class="font-semibold mb-1" title="ThePrimeHQ Address">Office Address</h2>
                            <span class="text-gray-600 text-sm">5 South Charlotte Street, Edinburgh, Scotland, United Kingdom, EH2 4AN</span>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-[50px] h-[50px] rounded-full flex items-center p-2 justify-center bg-primary">
                            <img src="https://api.iconify.design/fa6-solid:envelope.svg?color=%23ffffff" width="20" alt="Address logo">
                        </div>
                        <div class="flex flex-col ml-3">
                            <h2 class="font-semibold mb-1" title="ThePrimeHQ Email Address">{{ __('messages.email') }}</h2>
                            <span class="text-gray-600 text-sm">contact(at)theprimehq.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>