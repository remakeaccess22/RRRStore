@props(['active' => false])

<a class="{{ $active ? 'bg-green-900 text-white' : 'text-gray-900 hover:bg-green-700 hover:text-white' }} flex items-center gap-x-3.5 py-2 px-2.5 rounded-md text-sm font-medium text-black transition-colors duration-300"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>
