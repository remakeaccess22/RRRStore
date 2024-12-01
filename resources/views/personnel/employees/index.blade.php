<x-app-layout>
    <x-slot name="header">
        Employees
    </x-slot>

    <div class="max-w-[85rem] px-2 sm:px-4 py-4 sm:py-10 lg:px-8 lg:py-14 mx-auto">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                        <!-- Header -->
                        <div
                            class="px-4 sm:px-6 py-3 sm:py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                            <div>
                                <h2 class="text-lg sm:text-xl font-semibold text-gray-800">
                                    {{ $title }}
                                </h2>
                            </div>
                            <!-- Search Bar -->
                            <div class="flex justify-end">
                                <div class="relative">
                                    <!-- Search Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="absolute left-2 top-1/2 transform -translate-y-1/2 h-4 w-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>

                                    <!-- Input Field -->
                                    <input type="text" id="searchBar" placeholder="Search"
                                        class="pl-8 pr-3 py-2 w-full sm:w-48 md:w-64 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-1 focus:ring-green-500 transition duration-300 ease-in-out bg-gray-50" />
                                </div>
                            </div>
                        </div>

                        <!-- Table -->
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        @foreach ($columns as $column)
                                            <th scope="col" class="px-4 sm:px-6 py-2 sm:py-3 text-center">
                                                <span
                                                    class="text-xs sm:text-sm font-semibold uppercase tracking-wide text-gray-800">
                                                    {{ $column }}
                                                </span>
                                            </th>
                                        @endforeach
                                        <th scope="col" class="px-4 sm:px-6 py-2 sm:py-3 text-center">
                                            <span
                                                class="text-xs sm:text-sm font-semibold uppercase tracking-wide text-gray-800">
                                                Actions
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @foreach ($data as $row)
                                        <tr>
                                            @foreach ($row as $cell)
                                                <td
                                                    class="px-4 sm:px-6 py-2 sm:py-3 text-xs sm:text-sm text-center text-gray-800">
                                                    {{ $cell }}
                                                </td>
                                            @endforeach
                                            <td class="px-4 sm:px-6 py-2 sm:py-3 text-center">
                                                <div class="flex justify-center space-x-2">

                                                    <!-- Remove Button -->
                                                    <button
                                                        class="px-3 py-1 text-xs sm:text-sm text-white bg-red-600 rounded-lg hover:bg-red-700 flex items-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                            fill="currentColor" viewBox="0 0 20 20">
                                                            <path
                                                                d="M4 3a1 1 0 011-1h10a1 1 0 011 1v1H4V3zm1 3v10a1 1 0 001 1h8a1 1 0 001-1V6H5zm2 2a1 1 0 112 0v4a1 1 0 11-2 0V8zm4 0a1 1 0 112 0v4a1 1 0 11-2 0V8z" />
                                                        </svg>
                                                        <span>Remove</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div
                            class="px-4 sm:px-6 py-3 sm:py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
                            <div>
                                <p class="text-xs sm:text-sm text-gray-700">
                                    Number of Results Here
                                </p>
                            </div>
                            <div>
                                <div class="inline-flex gap-x-2">
                                    <button type="button"
                                        class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m15 18-6-6 6-6" />
                                        </svg>
                                        Prev
                                    </button>

                                    <button type="button"
                                        class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none">
                                        Next
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m9 18 6-6-6-6" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
