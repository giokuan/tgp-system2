<div class="mt-16   mx-10 xl:mx-32">
    <div class="pt-24 w-full">
    <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
      <div class="relative flex flex-col bg-clip-border rounded-xl backdrop-blur-md bg-white/30 text-black shadow-md">
        <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 12h2l-9 -9l-9 9h2v7a2 2 0 0 0 2 2h5.5" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2" /><path d="M16 19h6" /><path d="M19 16v6" /></svg>
        </div>
        <div class="p-4 text-right">
          <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Total Chapters</p>
          <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">{{ $totalChapters }}</h4>
        </div>
        <div class="border-t border-blue-gray-50 p-4">
          <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
            {{-- <strong class="text-green-500">+55%</strong>&nbsp;than last week --}}
          </p>
        </div>
      </div>

      <div class="relative flex flex-col bg-clip-border rounded-xl backdrop-blur-md bg-white/30 text-black shadow-md">
        <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-yellow-600 to-yellow-400 text-white shadow-yellow-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
        </div>
        <div class="p-4 text-right">
          <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Total Members</p>
          <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">{{ $totalMembers }}</h4>
        </div>
        <div class="border-t border-blue-gray-50 p-4">
          <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
            {{-- <strong class="text-green-500">+3%</strong>&nbsp;than last month --}}
          </p>
        </div>
      </div>

      <div class="relative flex flex-col bg-clip-border rounded-xl backdrop-blur-md bg-white/30 text-black shadow-md">
        <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4c.96 0 1.84 .338 2.53 .901" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M16 19h6" /><path d="M19 16v6" /></svg>
        </div>
        <div class="p-4 text-right">
          <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Active</p>
          <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">{{ $totalActive }}</h4>
        </div>
        <div class="border-t border-blue-gray-50 p-4">
          <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
            {{-- <strong class="text-red-500">-2%</strong>&nbsp;than yesterday --}}
          </p>
        </div>
      </div>
      <div class="relative flex flex-col bg-clip-border rounded-xl backdrop-blur-md bg-white/30 text-black shadow-md">
        <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-orange-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users-minus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4c.948 0 1.818 .33 2.504 .88" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M16 19h6" /></svg>
        </div>
        <div class="p-4 text-right">
          <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Inactive</p>
          <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">{{ $totalInactive }}</h4>
        </div>
        <div class="border-t border-blue-gray-50 p-4">
          <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
            {{-- <strong class="text-green-500">+5%</strong>&nbsp;than yesterday --}}
          </p>
        </div>
      </div>
    </div>
</div>