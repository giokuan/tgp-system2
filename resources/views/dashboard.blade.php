<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-16">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    {{-- <x-welcome></x-welcome> --}}
    <livewire:report-status />

    <footer class="flex items-center justify-center py-16 text-center text-sm text-yellow-500">
        {{-- © 2024 SJMC, All rights reserved. --}}
        Powered by: <img class="size-16" src="{{ asset('storage/logo/giovan.png')}}" alt="giovan logo">
    </footer>
   
</x-app-layout>
