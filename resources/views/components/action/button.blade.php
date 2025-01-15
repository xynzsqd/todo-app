@props(['href' => null])

@php
    $styles =
        'flex justify-center items-center px-3 py-2 text-2xl font-black bg-neutral-700 hover:bg-neutral-900 transition-colors duration-300 text-white rounded-lg';
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->class($styles) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->class($styles) }}>{{ $slot }}</button>
@endif
