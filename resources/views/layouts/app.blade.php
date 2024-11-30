<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'RManage') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex">
    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content -->
    <div class="flex-1 min-h-screen bg-gray-100">
        <!-- Hamburger Toggle Button -->
        <button id="toggleSidebar" class="p-2 text-gray-800 rounded lg:hidden">
            <!-- Hamburger Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
        <h1 class="text-xl font-bold"></h1>

        <main class="p-4">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
