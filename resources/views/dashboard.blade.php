<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-16">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    {{-- <x-welcome></x-welcome> --}}

        <livewire:report-status />
  
        <livewire:slider-logo />



    <div class="mt-16">
        <footer class="flex items-center justify-center pt-8 mb-4 text-center text-sm text-yellow-500 overflow-hidden">
        
            Powered by: <img class="size-12" src="{{ asset('storage/logo/diaspora.webp')}}" alt="Diaspora logo">
        </footer>
    </div>

</x-app-layout>
