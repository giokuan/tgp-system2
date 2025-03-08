<div class="min-h-screen dark:bg-slate-800 gap-4 flex flex-col items-center mx-4 mb-4">
    <div
      class="backdrop-blur-md bg-white/30 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
      <div class="flex items-center gap-4 w-full">
        @if($chairmanNamePhoto)
        <img src="{{ asset('storage/' . $chairmanNamePhoto) }}" alt="Judicial Photo" class="w-24 h-24 rounded-full mt-2">
        @else
            <p>No photo available</p>
        @endif
        <div class="transition-all transform duration-500">
          <h1 class="text-black dark:text-gray-200 font-bold">
            {{ $chairmanName }}
          </h1>
          <p class="text-black">{{ $position }}&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p>
         
        </div>
      </div>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <div
        class="backdrop-blur-md bg-white/30 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
            <div class="flex items-center gap-4">
                @if($viceChairmanInternalPhoto)
                <img src="{{ asset('storage/' . $viceChairmanInternalPhoto) }}" alt="Judicial Photo" class="w-24 h-24 rounded-full mt-2">
                @else
                    <p>No photo available</p>
                @endif
            <div class="w-fit transition-all transform duration-500">
                <h1 class="text-black dark:text-gray-200 font-bold">
                    {{ $viceChairmanInternal }}
                </h1>
                <p class="text-black">{{ $vicePositionInternal }}</p>
              
            </div>
            </div>

        </div>

        <div
        class="backdrop-blur-md bg-white/30 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
        <div class="flex items-center gap-4">
            @if($viceChairmanExternalPhoto)
            <img src="{{ asset('storage/' . $viceChairmanExternalPhoto) }}" alt="Judicial Photo" class="w-24 h-24 rounded-full mt-2">
            @else
                <p>No photo available</p>
            @endif
            <div class="w-fit transition-all transform duration-500">
            <h1 class="text-black dark:text-gray-200 font-bold">
                {{ $viceChairmanExternal }}
            </h1>
            <p class="text-black">{{ $vicePositionExternal }}</p>
          
            </div>
        </div>

        </div>

    </div>


    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">

        <div
        class="backdrop-blur-md bg-white/30 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
            <div class="flex items-center gap-4">
                @if($secretaryPhoto)
                <img src="{{ asset('storage/' . $secretaryPhoto) }}" alt="Judicial Photo" class="w-24 h-24 rounded-full mt-2">
                @else
                    <p>No photo available</p>
                @endif
            <div class="w-fit transition-all transform duration-500">
                <h1 class="text-black dark:text-gray-200 font-bold">
                    {{ $secretary }}
                </h1>
                <p class="text-black">{{ $secretaryPosition }}&nbsp; &nbsp; &nbsp;</p>
                
            </div>
            </div>

        </div>

        <div
        class="backdrop-blur-md bg-white/30 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
        <div class="flex items-center gap-4">
            @if($treasurerPhoto)
            <img src="{{ asset('storage/' . $treasurerPhoto) }}" alt="Judicial Photo" class="w-24 h-24 rounded-full mt-2">
            @else
                <p>No photo available</p>
            @endif
            <div class="w-fit transition-all transform duration-500">
            <h1 class="text-black dark:text-gray-200 font-bold">
                {{ $treasurer }}
            </h1>
            <p class="text-black">{{ $treasurerPosition }}&nbsp; &nbsp; &nbsp;</p>
          
            </div>
        </div>

        </div>

        <div
        class="backdrop-blur-md bg-white/30 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
        <div class="flex items-center gap-4">
            @if($auditorPhoto)
            <img src="{{ asset('storage/' . $auditorPhoto) }}" alt="Judicial Photo" class="w-24 h-24 rounded-full mt-2">
            @else
                <p>No photo available</p>
            @endif
            <div class="w-fit transition-all transform duration-500">
            <h1 class="text-black dark:text-gray-200 font-bold">
                {{ $auditor }}
            </h1>
            <p class="text-black">{{ $auditorPosition }}&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
          
            </div>
        </div>

        </div>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">

        <div
        class="backdrop-blur-md bg-white/30 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
            <div class="flex items-center gap-4">
                @if($judicial1Photo)
                <img src="{{ asset('storage/' . $judicial1Photo) }}" alt="Judicial Photo" class="w-24 h-24 rounded-full mt-2">
                @else
                    <p>No photo available</p>
                @endif
            <div class="w-fit transition-all transform duration-500">
                <h1 class="text-black dark:text-gray-200 font-bold">
                    {{ $judicial1 }}
                </h1>
                </h1>
                <p class="text-black w-24">Judicial </p>
              
            </div>
            </div>

        </div>

        <div
        class="backdrop-blur-md bg-white/30 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
        <div class="flex items-center gap-4">
            {{-- <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxhdmF0YXJ8ZW58MHwwfHx8MTY5MTg0NzYxMHww&ixlib=rb-4.0.3&q=80&w=1080"
            class="w-24 h-24  object-center object-cover rounded-full "
        /> --}}
            @if($judicial2Photo)
                <img src="{{ asset('storage/' . $judicial2Photo) }}" alt="Judicial Photo" class="w-24 h-24 rounded-full mt-2">
            @else
                <p>No photo available</p>
            @endif
            <div class="w-fit transition-all transform duration-500">
            <h1 class="text-black dark:text-gray-200 font-bold">
                {{ $judicial2  }}
            </h1>
            </h1>
            <p class="text-black">Judicial</p>
           
            </div>
        </div>

        </div>

        <div
        class="backdrop-blur-md bg-white/30 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
        <div class="flex items-center gap-4">
            @if($judicial3Photo)
                <img src="{{ asset('storage/' . $judicial3Photo) }}" alt="Judicial Photo" class="w-24 h-24 rounded-full mt-2">
            @else
                <p>No photo available</p>
            @endif
            <div class="w-fit transition-all transform duration-500">
            <h1 class="text-black dark:text-gray-200 font-bold">
                {{ $judicial3  }}
            </h1>
            <p class="text-black">Judicial</p>
        
            </div>
        </div>

        </div>

        <div
        class="backdrop-blur-md bg-white/30 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
        <div class="flex items-center gap-4">
            @if($judicial4Photo)
            <img src="{{ asset('storage/' . $judicial4Photo) }}" alt="Judicial Photo" class="w-24 h-24 rounded-full mt-2">
            @else
                <p>No photo available</p>
            @endif
            <div class="w-fit transition-all transform duration-500">
            <h1 class="text-black dark:text-gray-200 font-bold">
                {{ $judicial4  }}
            </h1>
            <p class="text-black">Judicial</p>
           
            </div>
        </div>

        </div>

    </div>


    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">

        <div
        class="backdrop-blur-md bg-white/30 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
            <div class="flex items-center gap-4">
                @if($adviser1Photo)
                <img src="{{ asset('storage/' . $adviser1Photo) }}" alt="Adviser Photo" class="w-24 h-24 rounded-full mt-2">
                @else
                    <p>No photo available</p>
                @endif
            <div class="w-fit transition-all transform duration-500">
                <h1 class="text-black dark:text-gray-200 font-bold">
                    {{ $adviser1  }}
                </h1>
                <p class="text-black">Adviser&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
               
            </div>
            </div>

        </div>

        <div
        class="backdrop-blur-md bg-white/30 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
        <div class="flex items-center gap-4">
            @if($adviser2Photo)
            <img src="{{ asset('storage/' . $adviser2Photo) }}" alt="Adviser Photo" class="w-24 h-24 rounded-full mt-2">
            @else
                <p>No photo available</p>
            @endif
            <div class="w-fit transition-all transform duration-500">
            <h1 class="text-black dark:text-gray-200 font-bold">
                {{ $adviser2  }}
            </h1>
            <p class="text-black">Adviser&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
          
            </div>
        </div>

        </div>

        <div
        class="backdrop-blur-md bg-white/30 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
        <div class="flex items-center gap-4">
            @if($adviser3Photo)
            <img src="{{ asset('storage/' . $adviser3Photo) }}" alt="Adviser Photo" class="w-24 h-24 rounded-full mt-2">
            @else
                <p>No photo available</p>
            @endif
            <div class="w-fit transition-all transform duration-500">
            <h1 class="text-black dark:text-gray-200 font-bold">
                {{ $adviser3  }}
            </h1>
            <p class="text-black">Adviser&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
           
            </div>
        </div>

        </div>

    </div>

    <div
    class="backdrop-blur-md bg-white/30 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
    <div class="flex items-center gap-4">
        @if($projectOfficerPhoto)
        <img src="{{ asset('storage/' . $projectOfficerPhoto) }}" alt="Adviser Photo" class="w-24 h-24 rounded-full mt-2">
        @else
            <p>No photo available</p>
        @endif
      <div class="w-fit transition-all transform duration-500">
        <h1 class="text-black dark:text-gray-200 font-bold">
            {{ $projectOfficer  }}
        </h1>
        <p class="text-black">Project Officer&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
      
      </div>
    </div>

  </div>


</div>
