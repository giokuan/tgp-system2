<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 inset-0" style="background-image:url('{{ asset('storage/logo/bricks.webp') }}'); background-size: cover; background-position: center;  z-index: -1 opacity: 0.9;">
    <div>
        {{-- <div class="absolute inset-0" style="background-image:url('{{ asset('storage/logo/bricks.webp') }}'); background-size: cover; background-position: center;  z-index: -1;"></div> --}}
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg backdrop-blur-md bg-white/30">
        {{ $slot }}
    </div>
</div>
