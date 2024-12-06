<!-- resources/views/components/responsive-table.blade.php -->
<div class="max-w-[85rem] px-2 sm:px-4 py-4 sm:py-10 lg:px-8 lg:py-14 mx-auto">
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                    <!-- Header -->
                    <div
                        class="px-4 sm:px-6 py-3 sm:py-4 grid gap-3 md:flex md:items-center md:justify-between border-b border-gray-200">
                        <!-- Title -->
                        <div class="mb-2 md:mb-0">
                            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">
                                {{ $title }}
                            </h2>
                        </div>

                        <!-- Action Controls -->
                        <div class="flex items-center space-x-4">
                            <!-- Filter -->
                            <x-table-filter />

                            <!-- Search Bar -->
                            <x-search-bar />

                            <!-- Create Button -->
                            @if ($createRoute)
                                <a href="{{ route($createRoute) }}"
                                    class="py-1.5 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-md border border-transparent bg-green-700 text-white hover:bg-green-900 transition-colors duration-300 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                    </svg>
                                    Create
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto ">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    @foreach ($columns as $column)
                                        <th class="px-4 sm:px-6 py-2 sm:py-3 text-center">
                                            <span class="text-xs sm:text-sm font-semibold uppercase text-gray-800">
                                                {{ $column }}
                                            </span>
                                        </th>
                                    @endforeach
                                    @if (!empty($actions))
                                        <th class="px-4 sm:px-6 py-2 sm:py-3 text-center">Actions</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($data as $row)
                                    <tr>
                                        @foreach ($row as $cell)
                                            <td class="text-md px-4 sm:px-6 py-2 sm:py-3 text-center text-gray-800">
                                                {{ $cell }}
                                            </td>
                                        @endforeach
                                        @if (!empty($actions))
                                            <td class="px-4 sm:px-6 py-2 sm:py-3 text-center">
                                                <div class="flex justify-center space-x-2">
                                                    @foreach ($actions as $action)
                                                        <x-action-button :type="'button'" :label="$action['label']"
                                                            :icon="$action['icon']" :color="$action['color']" :hoverColor="$action['hoverColor']" />
                                                    @endforeach
                                                </div>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Footer -->
                    <x-table-footer />
                </div>
            </div>
        </div>
    </div>
</div>
