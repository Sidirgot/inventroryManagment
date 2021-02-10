@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center w-full pl-4 py-3 border-b-2 border-secondary bg-primary text-sm font-medium leading-5 text-white focus:outline-none hover:border-b-2 hover:border-gray-300 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center w-full pl-4 py-3 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:border-gray-300 hover:bg-primary focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
