@props(['active' => false])

<a class="{{ $active ? 'bg-green-900 text-white' : 'text-green-400 hover:bg-green-400 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"

    aria-current="{{ $active ? 'page' : false }}"
    {{ $attributes }} >
    {{ $slot }}
</a>
