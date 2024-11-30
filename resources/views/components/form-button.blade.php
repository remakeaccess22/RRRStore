    <button
        {{ $attributes->merge(['class' => 'w-full rounded-md bg-green-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-700 transition-colors duration-300', 'type' => 'submit']) }}>{{ $slot }}</button>
