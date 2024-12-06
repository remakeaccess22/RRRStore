<button type="{{ $type }}"
    class="px-3 py-2 text-xs sm:text-sm text-white {{ $color }} {{ 'hover:' . $hoverColor }} rounded-md flex items-center gap-2 transition duration-300">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
        stroke-width="2">
        {!! $icon !!}
    </svg>
    <span>{{ $label }}</span>
</button>
