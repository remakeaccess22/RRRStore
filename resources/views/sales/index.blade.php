<x-app-layout>
    <x-slot name="header">
        {{ $title }}
    </x-slot>

    <x-reusable-table :title="$title" :columns="$columns" :data="$data" :actions="$actions" :createRoute="$createRoute" />
</x-app-layout>
