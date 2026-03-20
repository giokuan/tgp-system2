<div class="min-h-screen dark:bg-slate-800 gap-4 flex flex-col items-center mx-4 mb-4 mt-8">
    @foreach($layoutGroups as $group)
        <div class="{{ $group['gridClass'] }}">
            @foreach($group['officers'] as $officer)
                <div class="backdrop-blur-md bg-white/30 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform w-full">
                    <div class="flex items-center gap-4">
                        @if($officer['photo'])
                            <img src="{{ asset('storage/' . $officer['photo']) }}" alt="{{ $officer['display_position'] }} Photo" class="w-24 h-24 rounded-full mt-2 object-cover">
                        @else
                            <p class="text-sm dark:text-gray-300">No photo available</p>
                        @endif
                        <div class="w-fit transition-all transform duration-500">
                            <h1 class="text-black dark:text-gray-200 font-bold">
                                {{ $officer['name'] }}
                            </h1>
                            <p class="text-black dark:text-gray-300">
                                {{ $officer['display_position'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
