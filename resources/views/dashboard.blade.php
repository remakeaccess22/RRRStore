<x-app-layout>
    <x-slot name="header">
        Dashboard
    </x-slot>

    <!-- Total Users Card -->
    <div class="mt-4">
        <div class="flex flex-wrap gap-4 justify-between bg-gray-100 mb-4">
            <!-- Card 1 -->
            <div
                class="flex flex-col bg-green-900 text-white shadow-sm rounded-xl flex-1 px-6 py-4 min-w-[250px] sm:max-w-sm md:flex-1">
                <p class="text-xs uppercase tracking-wide text-gray-200">
                    Total Sales this month
                </p>
                <div class="mt-2 flex items-center justify-between">
                    <h3 class="text-2xl font-semibold text-white">
                        72,540
                    </h3>
                    <span class="text-green-300 flex items-center text-sm">
                        <svg class="inline-block mr-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                            <polyline points="16 7 22 7 22 13"></polyline>
                        </svg>
                        1.7%
                    </span>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="flex flex-col bg-green-900 text-white shadow-sm rounded-xl flex-1 px-6 py-4 min-w-[250px] sm:max-w-sm md:flex-1">
                <p class="text-xs uppercase tracking-wide text-gray-200">
                    Total Number of Products
                </p>
                <div class="mt-2 flex items-center justify-between">
                    <h3 class="text-2xl font-semibold text-white">
                        1,245
                    </h3>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="flex flex-col bg-green-900 text-white shadow-sm rounded-xl flex-1 px-6 py-4 min-w-[250px] sm:max-w-sm md:flex-1">
                <p class="text-xs uppercase tracking-wide text-gray-200">
                    Total Number of Employees
                </p>
                <div class="mt-2 flex items-center justify-between">
                    <h3 class="text-2xl font-semibold text-white">
                        21
                    </h3>
                </div>
            </div>

            <!-- Card 4 -->
            {{-- <div
                class="flex flex-col bg-green-900 text-white shadow-sm rounded-xl flex-1 px-6 py-4 min-w-[250px] sm:max-w-sm md:flex-1">
                <p class="text-xs uppercase tracking-wide text-gray-200">
                    Pageviews
                </p>
                <div class="mt-2 flex items-center justify-between">
                    <h3 class="text-2xl font-semibold text-white">
                        92,913
                    </h3>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="bg-white shadow-md rounded-xl p-4">
        <div class="flex justify-between items-center gap-x-4 mb-3 sm:mb-6">
            <span class="ml-3 text-lg font-bold">Sales Performance</span>
            <div class="relative">
                <button
                    class="px-4 py-2 bg-green-900 text-white rounded-lg hover:bg-green-700 transition flex text-sm items-center"
                    id="dropdownButton" aria-expanded="false" onclick="toggleDropdown()">
                    View Period
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="dropdownMenu" class="absolute right-0 mt-2 w-40 bg-white shadow-lg rounded-lg hidden z-50">
                    <ul class="py-2 text-gray-700">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                Daily
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                Weekly
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                Monthly
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                Annually
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="hs-curved-area-charts"></div>
    </div>

    <div class="bg-white mt-4 shadow-md rounded-xl p-4">
        <div class="flex justify-between items-center gap-x-4 mb-3 sm:mb-6">
            <span class="ml-3 text-lg font-bold">Most Sold Products</span>
        </div>
        <div id="most-sold-bar-chart-race"></div>
    </div>
</x-app-layout>
