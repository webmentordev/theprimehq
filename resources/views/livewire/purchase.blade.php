<section class="w-full">
    <div class="max-w-7xl m-auto py-12 px-4 grid grid-cols-2 gap-6">
        <div class="w-full flex flex-col"
            x-data="{ 
            images: [ 
                '/images/products/the-prime-hq-car-towel-dimension-and-scratch-free.jpg',
                '/images/products/the-prime-hq-car-towels-3.png',
                '/images/products/the-prime-hq-car-towels-features.jpg',
                '/images/products/the-prime-hq-car-towels-reusability-and-durability.png',
                '/images/products/the-prime-hq-car-towels.png',
                '/images/products/the-prime-hq-multipurpose-car-cleaning-towel.jpg',
                '/images/products/the-prime-hq-soft-car-cleaning-towel.png'
            ], active: null }" x-init="active = images[0]">
            <img class="w-full h-[600px] mb-6 rounded-lg" :src="active">
            <div class="flex justify-between">
                <template x-for="(image, index) in images" :key="index">
                    <img :src="image" width="80px" class="rounded-lg" :class="{ 'border-4 border-blue-500': active == image }" x-on:mouseenter="active = image">
                </template>
            </div>
        </div>
        <div class="w-full">
            <h1 class="text-5xl mb-1">Microfiber Towel Car Drying detailing polishing Absorbent Towel Car Seat Wash Towel</h1>
            <h3 class="text-3xl mb-3"><span class="text-primary">€9.99</span> (Free Shipping)</h3>
            <button wire:click='store'>Checkout</button>
        </div>
    </div>
</section>
