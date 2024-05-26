@props(['disabled' => false])

<textarea rows="4" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'mt-1 border border-gray-200 rounded-lg w-full']) !!} autocomplete="off"></textarea>