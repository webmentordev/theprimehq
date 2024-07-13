<section class="w-full">
    <div class="max-w-7xl m-auto py-12 px-4 grid grid-cols-2 gap-6">
        <div class="w-full flex flex-col" x-data="{
            images: [
                '/images/products/the-prime-hq-car-towels-3.png',
                '/images/products/the-prime-hq-car-towels-features.jpg',
                '/images/products/the-prime-hq-car-towels-reusability-and-durability.png',
                '/images/products/the-prime-hq-car-towels.png',
                '/images/products/the-prime-hq-multipurpose-car-cleaning-towel.jpg',
                '/images/products/the-prime-hq-soft-car-cleaning-towel.png'
            ],
            active: null
        }" x-init="active = images[0]">
            <img class="w-full h-[600px] mb-6 rounded-lg" :src="active">
            <div class="flex justify-between">
                <img src="/images/products/the-prime-hq-car-towel-dimension-and-scratch-free.jpg" width="80px"
                    class="rounded-lg" :class="{ 'border-4 border-blue-500': active == $el.src }"
                    x-on:mouseenter="active = $el.src">
                <img src="/images/products/the-prime-hq-car-towels-features.jpg" width="80px" class="rounded-lg"
                    :class="{ 'border-4 border-blue-500': active == $el.src }" x-on:mouseenter="active = $el.src">
                <img src="/images/products/the-prime-hq-car-towels-reusability-and-durability.png" width="80px"
                    class="rounded-lg" :class="{ 'border-4 border-blue-500': active == $el.src }"
                    x-on:mouseenter="active = $el.src">
                <img src="/images/products/the-prime-hq-car-towels.png" width="80px" class="rounded-lg"
                    :class="{ 'border-4 border-blue-500': active == $el.src }" x-on:mouseenter="active = $el.src">
                <img src="/images/products/the-prime-hq-multipurpose-car-cleaning-towel.jpg" width="80px"
                    class="rounded-lg" :class="{ 'border-4 border-blue-500': active == $el.src }"
                    x-on:mouseenter="active = $el.src">
                <img src="/images/products/the-prime-hq-soft-car-cleaning-towel.png" width="80px" class="rounded-lg"
                    :class="{ 'border-4 border-blue-500': active == $el.src }" x-on:mouseenter="active = $el.src"
                    x-init="console.log()">
            </div>
        </div>
        <div class="w-full pt-8" x-data="{ quantity: 1 }">
            <h1 class="text-4xl mb-5">Microfiber Towel Car Drying detailing polishing Absorbent Towel Car Seat Wash
                Towel</h1>
            <h3 class="text-3xl mb-3"><span class="text-primary">€<span x-text="9.99 * quantity"></span></span>
                (Kostenloser
                Versand)</h3>
            <ul class="list-disc ml-8 mb-4">
                <li class="mb-2">{{ __('messages.features.f1') }}</li>
                <li class="mb-2">{{ __('messages.features.f2') }}</li>
                <li class="mb-2">{{ __('messages.features.f3') }}</li>
                <li class="mb-2">{{ __('messages.features.f4') }}</li>
                <li class="mb-2">{{ __('messages.features.f5') }}</li>
                <li class="mb-2">{{ __('messages.features.f6') }}</li>
                <li class="mb-2">{{ __('messages.features.f7') }}</li>
                <li class="mb-2">{{ __('messages.features.f8') }}</li>
            </ul>
            <div class="w-full mb-3">
                <x-input-label for="email" :value="__('messages.form.email')" />
                <x-input id="email" type="email" wire:model='email' />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <button wire:click='store'
                class="px-4 py-3 bg-dark rounded-lg w-full text-center text-white font-semibold flex items-center justify-center">
                <img src="https://api.iconify.design/fa6-brands:stripe.svg?color=%23ffffff" alt="Stripe logo"
                    width="50px">
                <span class="ml-2"> | {{ __('messages.purchase.pay') }}</span>
            </button>
        </div>
    </div>
</section>
