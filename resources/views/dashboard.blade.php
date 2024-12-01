<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-16">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    {{-- <x-welcome></x-welcome> --}}
    <livewire:report-status />


    <div class="min-h-screen dark:bg-slate-800 gap-6 flex flex-col items-center ">
        <div
          class="bg-gray-100 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
          <div class="flex items-center gap-4">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxhdmF0YXJ8ZW58MHwwfHx8MTY5MTg0NzYxMHww&ixlib=rb-4.0.3&q=80&w=1080"
            class="w-24 group-hover:w-36 group-hover:h-36 h-24 object-center object-cover rounded-full transition-all duration-500 delay-500 transform"
          />
            <div class="w-fit transition-all transform duration-500">
              <h1 class="text-gray-600 dark:text-gray-200 font-bold">
                Mary Phiri
              </h1>
              <p class="text-gray-400">Senior Developer</p>
              <a
                class="text-xs text-gray-500 dark:text-gray-200 group-hover:opacity-100 opacity-0 transform transition-all delay-300 duration-500">
                mary@gmail.com
              </a>
            </div>
          </div>

        </div>

        <div class="grid grid-cols-2 gap-4">

        <div
        class="bg-gray-100 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
        <div class="flex items-center gap-4">
          <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxhdmF0YXJ8ZW58MHwwfHx8MTY5MTg0NzYxMHww&ixlib=rb-4.0.3&q=80&w=1080"
          class="w-32 group-hover:w-36 group-hover:h-36 h-32 object-center object-cover rounded-full transition-all duration-500 delay-500 transform"
        />
          <div class="w-fit transition-all transform duration-500">
            <h1 class="text-gray-600 dark:text-gray-200 font-bold">
              Mary Phiri
            </h1>
            <p class="text-gray-400">Senior Developer</p>
            <a
              class="text-xs text-gray-500 dark:text-gray-200 group-hover:opacity-100 opacity-0 transform transition-all delay-300 duration-500">
              mary@gmail.com
            </a>
          </div>
        </div>

      </div>

      <div
      class="bg-gray-100 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
      <div class="flex items-center gap-4">
        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxhdmF0YXJ8ZW58MHwwfHx8MTY5MTg0NzYxMHww&ixlib=rb-4.0.3&q=80&w=1080"
        class="w-32 group-hover:w-36 group-hover:h-36 h-32 object-center object-cover rounded-full transition-all duration-500 delay-500 transform"
      />
        <div class="w-fit transition-all transform duration-500">
          <h1 class="text-gray-600 dark:text-gray-200 font-bold">
            Mary Phiri
          </h1>
          <p class="text-gray-400">Senior Developer</p>
          <a
            class="text-xs text-gray-500 dark:text-gray-200 group-hover:opacity-100 opacity-0 transform transition-all delay-300 duration-500">
            mary@gmail.com
          </a>
        </div>
      </div>

    </div>
</div>
      </div>

    <footer class="flex items-center justify-center py-16 text-center text-sm text-yellow-500">
        {{-- © 2024 SJMC, All rights reserved. --}}
        Powered by: <img class="size-16" src="{{ asset('storage/logo/giovan.png')}}" alt="giovan logo">
    </footer>
   
</x-app-layout>
