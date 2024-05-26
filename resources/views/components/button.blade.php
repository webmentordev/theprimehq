<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-3 bg-primary rounded-lg text-white']) }}>
    {{ $slot }}
</button>
