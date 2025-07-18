@props(['active' => false])

<a class="{{ $active ? 'bg-gray-600 text-white' : 'text-white hover:bg-gray-600 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"

    aria-current="{{ $active ? 'page' : false }}"
    {{ $attributes }} >
    {{ $slot }}
</a>
