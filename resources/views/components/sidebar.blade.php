<div id="sidebar"
    class="fixed inset-y-0 left-0 transform -translate-x-full bg-white shadow-xl w-64 overflow-y-auto transition-transform duration-300 lg:translate-x-0 lg:static lg:inset-0 flex flex-col justify-between z-40 max-w-screen-md">
    <!-- Top Section -->
    <div class="p-4 text-gray-900">
        <!-- Logo and Close Button -->
        <div class="flex justify-between items-center">
            <div class="mt-4 mx-auto">
                <x-logo />
            </div>
            <button id="closeSidebar" class="text-green-900 rounded md:hidden lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Navigation Links -->
        <ul class="mt-4">
            <!-- Dashboard -->
            <div class="mt-2">
                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    <svg class="shrink-0 w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    Dashboard
                </x-nav-link>
            </div>

            <!-- Inventory -->
            <div class="mt-2">
                <x-nav-link href="{{ route('inventory') }}" :active="request()->routeIs('inventory')">
                    <svg class="shrink-0 w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M3 20V7l9-4 9 4v13"></path>
                        <path d="M13 10h3v3h-3z"></path>
                        <path d="M6 16h12v5H6z"></path>
                    </svg>
                    Inventory
                </x-nav-link>
            </div>

            <!-- Sales -->
            <div class="mt-2">
                <x-nav-link href="{{ route('sales') }}" :active="request()->routeIs('sales')">
                    <svg class="shrink-0 w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="2" y="5" width="20" height="14" rx="2" ry="2"></rect>
                        <line x1="12" y1="8" x2="12" y2="16"></line>
                        <path d="M9 12h6"></path>
                    </svg>
                    Sales
                </x-nav-link>
            </div>

            <!-- Personnels Dropdown -->
            <div class="mt-2">
                <li class="hs-accordion" id="personnel-accordion">
                    <button type="button"
                        class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-green-900 w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm font-medium text-gray-900 hover:text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600"
                        aria-expanded="{{ request()->routeIs('personnel.employees', 'personnel.applicants') ? 'true' : 'false' }}"
                        aria-controls="personnel-accordion-content">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                        Personnels
                        <svg class="hs-accordion-active:hidden ms-auto block w-4 h-4 group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                        <svg class="hs-accordion-active:block ms-auto hidden w-4 h-4 text-white group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6" />
                        </svg>
                    </button>

                    <div id="personnel-accordion-content"
                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 {{ request()->routeIs('personnel.employees', 'personnel.applicants') ? '' : 'hidden' }}"
                        role="region" aria-labelledby="personnel-accordion">
                        <ul class="pl-3 pt-2">
                            <li class="mt-2">
                                <x-nav-link href="{{ route('personnel.employees') }}" :active="request()->routeIs('personnel.employees')">
                                    Employees
                                </x-nav-link>
                            </li>
                            <li class="mt-2">
                                <x-nav-link href="{{ route('personnel.applicants') }}" :active="request()->routeIs('personnel.applicants')">
                                    Applicants
                                </x-nav-link>
                            </li>
                        </ul>
                    </div>
                </li>
            </div>

            <!-- Archived Dropdown -->
            <div class="mt-2">
                <li class="hs-accordion" id="archived-accordion">
                    <button type="button"
                        class="hs-accordion-toggle hs-accordion-active:text-white hs-accordion-active:bg-green-900 w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm font-medium text-gray-900 hover:text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600"
                        aria-expanded="{{ request()->routeIs('archived.products', 'archived.employees') ? 'true' : 'false' }}"
                        aria-controls="archived-accordion-content">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16v4H4z" />
                            <rect x="2" y="8" width="20" height="12" rx="2" ry="2" />
                        </svg>
                        Archived
                        <svg class="hs-accordion-active:hidden ms-auto block w-4 h-4 group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                        <svg class="hs-accordion-active:block ms-auto hidden w-4 h-4 text-white group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6" />
                        </svg>
                    </button>

                    <div id="archived-accordion-content"
                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 {{ request()->routeIs('archived.products', 'archived.employees') ? '' : 'hidden' }}"
                        role="region" aria-labelledby="archived-accordion">
                        <ul class="pl-3 pt-2">
                            <li class="mt-2">
                                <x-nav-link href="{{ route('archived.products') }}" :active="request()->routeIs('archived.products')">
                                    Archived Products
                                </x-nav-link>
                            </li>
                            <li class="mt-2">
                                <x-nav-link href="{{ route('archived.employees') }}" :active="request()->routeIs('archived.employees')">
                                    Archived Employees
                                </x-nav-link>
                            </li>
                        </ul>
                    </div>
                </li>
            </div>
        </ul>
    </div>

    <!-- Footer Section -->
    <div class="p-4">
        <button type="submit"
            class="flex items-center gap-2 text-xs text-gray-900 hover:text-white transition-colors duration-300 hover:bg-red-500 p-2 rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                <polyline points="16 17 21 12 16 7"></polyline>
                <line x1="21" y1="12" x2="9" y2="12"></line>
            </svg>
            Logout
        </button>
    </div>
</div>
