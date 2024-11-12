
<div >

    <!-- Skeleton Loader -->
    <div wire:loading class="flex w-52 flex-col gap-4">
       <div class="skeleton h-32 w-full"></div>
       <div class="skeleton h-4 w-28"></div>
       <div class="skeleton h-4 w-full"></div>
       <div class="skeleton h-4 w-full"></div>
   </div>
   
<div class="container p-5 mx-auto my-5 dark:bg-dark-eval-1">
<div class="md:flex no-wrap md:-mx-2">

   <div class="w-full md:w-5/12 xl:w-3/12 md:mr-2">
       <div class="p-3 backdrop-blur-md bg-white/30 dark:bg-dark-eval-1 hover:shadow">
           <div class="grid dark:bg-dark-eval-1">
               <div class="w-full my-2 text-center md:h-72 md:w-72">
                   <img class="w-full h-full" src="{{ asset('storage/' . $member->photo) }}" alt="">
               </div>
           </div>
       </div>
       {{-- <input type="hidden" value="{{ $member->id }}" name="id" /> --}}
  

       <!-- Profile Card -->
       <div class="p-3 backdrop-blur-md bg-white/30 border-t-4 border-black dark:bg-dark-eval-1">
           <div class="overflow-hidden image">
               <img class="w-full h-auto mx-auto"
                   src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                   alt="">
           </div>
           <h1 class="flex items-center my-1 text-xl font-bold text-black dark:text-teal-600">
               {{ $member->aka }}</h1>

           <ul class="px-3 py-2 mt-3 text-black  divide-y rounded shadow-xl dark:bg-dark-eval-1 hover:text-gray-700 hover:shadow">
               <li class="flex items-center py-3 font-bold dark:text-teal-600 md:text-xs">
                   <span>STATUS</span>
                   @if ($member->status === 'ACTIVE')
                       <span class="ml-auto"><span class="px-2 py-1 text-white bg-green-500 rounded md:text-xs">{{ $member->status }}</span></span>
                   @elseif($member->status === 'INACTIVE')
                       <span class="ml-auto"><span class="px-2 py-1 text-white bg-blue-500 rounded md:text-xs">{{ $member->status }}</span></span>
                   @else
                       <span class="ml-auto"><span class="px-2 py-1 text-white bg-red-500 rounded md:text-xs">{{ $member->status }}</span></span>
                   @endif
               </li>
               <li class="flex flex-col items-center py-3 dark:text-teal-600">
                   <span>MEMBER-ID:</span>
                   <span class="flex items-center md:text-xs">{{ $member->member_id }}</span>
               </li>
           </ul>
       </div>
       <!-- End of profile card -->
       <div class="my-4"></div>
       <!-- Friends card -->

   </div>
   <!-- Right Side -->
   <div class="w-full">
       <!-- Profile tab -->
       <!-- About Section -->
       <div class="p-3 backdrop-blur-md bg-white/30 rounded-sm shadow-xl dark:bg-dark-eval-1">
           <div class="flex items-center space-x-2 font-semibold leading-8 text-black">
               <span clas="text-green-500">
                   <svg class="h-5 dark:text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                       viewBox="0 0 24 24" stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                   </svg>
               </span>
               <span class="tracking-wide dark:text-teal-600">ABOUT</span>
           </div>

           <div class="text-black">
               <div class="grid text-sm md:grid-cols-1">
                   <div class="flex items-center shadow-md">
                       <div class="pl-2 font-semibold dark:text-teal-600 xl:py-2">NAME:</div>
                       <div class="py-2 pl-4 dark:text-gray-500">{{ $member->first_name }} {{ $member->middle_name }} {{ $member->last_name }}</div>
                   </div>
                   <div class="flex items-center shadow-md">
                       <div class="pl-2 font-semibold dark:text-teal-600">T-BIRTH:</div>
                       <div class="p-2 pl-4 dark:text-gray-500">{{ $member->t_birth }}</div>
                   </div>

                   <div class="flex items-center shadow-md">
                       <div class="pl-2 font-semibold dark:text-teal-600">BATCH NAME:</div>
                       <div class="p-2 pl-4 dark:text-gray-500">{{ $member->batch_name }}</div>
                   </div>

                   <div class="flex items-center shadow-md">
                       <div class="pl-2 font-semibold dark:text-teal-600">CURRENT CHAPTER:</div>
                       <div class="p-2 pl-4 dark:text-gray-500">{{ $member->current_chapter }}</div>
                   </div>

                   <div class="flex items-center shadow">
                       <div class="pl-2 font-semibold dark:text-teal-600">ROOT CHAPTER:</div>
                       <div class="p-2 pl-4 dark:text-gray-500">{{ $member->root_chapter }}</div>
                   </div>
               </div>
           </div>

       </div>
       <!-- End of about section -->

       <div class="my-4"></div>

       <!-- Experience and education -->
       <div class="p-3 backdrop-blur-md bg-white/30 rounded-sm shadow-xl dark:bg-dark-eval-1">
           <div bg-white dark:bg-dark-eval>
               <div class="flex items-center mb-3 space-x-2 font-semibold text-black">
                   <span clas="text-yellow-500">
                       <svg class="h-5 dark:text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                           viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                               d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                       </svg>
                   </span>
                   <span class="tracking-wide dark:text-teal-600">CONTACT</span>
               </div>
               <ul class="space-y-2">
                   <li>
                       <div class="text-yellow-500">EMAIL</div>
                       <div class="text-sm text-black">{{ $member->email }}</div>
                   </li>
                   <li>
                       <div class="text-yellow-500">PHONE</div>
                       <div class="text-sm text-black">{{ $member->phone }}</div>
                   </li>

                   <li>
                       <div class="text-yellow-500">ADDRESS</div>
                       <div class="text-sm text-black">{{ $member->address }}</div>
                   </li>
               </ul>
           </div>
           <div class="flex gap-4 pt-8 pb-8 dark:bg-dark-eval">
               <button onclick="goBack()" type="button"
                   class="w-full bg-gre text-md md:text-md mt-2 text-black  
                       hover:text-yellow-500 border-black hover:bg-gray-700 hover:border-yellow-500 dark:hover:bg-gray-500 rounded p-3 pt-2 shadow-lg flex  
                       justify-center dark:bg-[#222738] dark:shadow-xl border">
                   BACK
               </button>

               @if(in_array(Auth::user()->user_type, ['admin', 'moderator']))
                <a wire:navigate href="{{ route('edit-profile', ['member_id' => $member->member_id]) }}"
                    class="w-full bg-gre text-md md:text-md mt-2 text-black 
                   hover:text-yellow-500 border-black hover:bg-gray-700 hover:border-yellow-500 dark:hover:bg-gray-500 rounded p-3 pt-2 shadow-lg flex  
                   justify-center dark:bg-[#222738] dark:shadow-xl border">
               EDIT
               </a>
               @endif
           </div>
       </div>
   </div>
</div>
</div>
</div>

<script>
function goBack() {
window.history.back();
}
</script>