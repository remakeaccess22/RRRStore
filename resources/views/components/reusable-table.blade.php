<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Card -->
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
                    <!-- Header -->
                    <div
                        class="px-6 py-4 flex flex-col gap-4 sm:flex-row sm:justify-between sm:items-center border-b border-gray-200">
                        <!-- Title -->
                        <h2 class="text-lg sm:text-xl font-semibold text-gray-800">
                            {{ $title }}
                        </h2>

                        <!-- Action Controls -->
                        <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:gap-4">
                            <!-- Filter -->
                            <x-table-filter />

                            <!-- Search Bar -->
                            <x-search-bar />

                            <!-- Create Button -->
                            @if ($createRoute)
                                <a href="{{ route($createRoute) }}"
                                    class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-md border border-transparent bg-green-700 text-white hover:bg-green-900 transition-all duration-300 focus:outline-none">
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
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-100">
                                <tr>
                                    @foreach ($columns as $column)
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-700">
                                            {{ $column }}
                                        </th>
                                    @endforeach
                                    @if (!empty($actions))
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-700">
                                            Actions
                                        </th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($data as $row)
                                    <tr>
                                        @foreach ($row as $key => $cell)
                                            @if ($key !== 'UserID')
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-center">
                                                    {{ $cell }}
                                                </td>
                                            @endif
                                        @endforeach
                                        @if (!empty($actions))
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                                <div class="flex justify-center space-x-2">
                                                    @foreach ($actions as $action)
                                                        <form method="{{ $action['method'] }}"
                                                            action="{{ route($action['action'], ['id' => $row['UserID'] ?? $row['ProductID']]) }}">
                                                            @if ($action['method'] !== 'GET')
                                                                @csrf
                                                            @endif
                                                            @if ($action['methodByCSRF'] !== 'POST')
                                                                @method($action['methodByCSRF'])
                                                            @endif
                                                            <x-action-button :type="$action['type']" :label="$action['label']"
                                                                :icon="$action['icon']" :color="$action['color']" :hoverColor="$action['hoverColor']" />
                                                        </form>
                                                    @endforeach
                                                </div>
                                            </td>
                                        @endif
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="{{ count($columns) + (!empty($actions) ? 1 : 0) }}"
                                            class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500">
                                            No data available.
                                        </td>
                                    </tr>
                                @endforelse
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
