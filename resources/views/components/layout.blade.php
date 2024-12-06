<div class="flex h-screen">
    <!-- Sidebar -->
    @include('components.sidebar')

    <!-- Main Content -->
    <div class="flex-1 p-6 bg-gray-50 lg:ml-64">
        <!-- Header (Table Filter, Search Bar, Create Button) -->
        <header class="flex items-center justify-between px-4 py-3 bg-white shadow-md border-b">
            <div class="flex space-x-4">
                @include('components.table-filter') <!-- Table Filter Component -->
                @include('components.search-bar') <!-- Search Bar Component -->
            </div>
            @yield('header-actions') <!-- Optional Header Actions -->
        </header>

        <!-- Main Content Area -->
        <main class="p-6">
            @yield('content') <!-- Content Section -->
        </main>
    </div>
</div>
