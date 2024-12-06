<div class="hs-dropdown relative inline-block">
    <button id="filterButton" type="button"
        class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50">
        <svg class="shrink-0 h-4 w-4 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 6h18" />
            <path d="M7 12h10" />
            <path d="M10 18h4" />
        </svg>
        Filter
    </button>
    <div class="hs-dropdown-menu hidden divide-y divide-gray-200 min-w-[200px] z-50 bg-white shadow-md rounded-lg mt-2">
        <label class="flex items-center py-2 px-3">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-green-700">
            <span class="ml-3 text-sm text-gray-800">Frequency</span>
        </label>
        <label class="flex items-center py-2 px-3">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-green-700">
            <span class="ml-3 text-sm text-gray-800">Status</span>
        </label>
    </div>
</div>
