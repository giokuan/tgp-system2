{{-- 
    <x-mary-collapse collapse-plus-minus>
        <x-slot:heading class="!bg-blue-50 italic text-red-500">
            How ...
        </x-slot:heading>
        <x-slot:content class="!bg-blue-100">
            <div class="mt-5">Are you?</div>
        </x-slot:content>
    </x-mary-collapse> --}}

    {{-- <div>
        <x-mary-collapse wire:model="show" separator class="bg-base-200">
            <x-slot:heading>
                <button wire:click="$toggle('show')">
                    {{ $show ? 'Hide' : 'Show' }}
                </button>
            </x-slot:heading>
            <x-slot:content>
                There!
            </x-slot:content>
        </x-mary-collapse>
    </div> --}}


    
    <div>

        <x-mary-collapse :open="$show" collapse-plus-minus>
            <x-slot:heading class="backdrop-blur-md bg-white/30 text-yellow-500" wire:click="toggle">
                History
            </x-slot:heading>
            <x-slot:content class="backdrop-blur-md bg-white/30">
                <div class="mt-5">Are you?</div>
            </x-slot:content>
        </x-mary-collapse>



        
    </div>
    