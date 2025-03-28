<div class="m-2 flex flex-col  gap-3 relative mt-28"
    wire:init="init"
    @if(strlen($polling = $this->polling()) > 0) wire:poll.{{ $polling }} @endif
>
    @include('livewire-table::bar.bar')
    <div
        class="overflow-x-auto bg-white border-neutral-200 dark:bg-neutral-900 dark:border-neutral-700 shadow-sm rounded-md overscroll-x-none">
        @include('livewire-table::table.table')
    </div>
    {{ $paginator->links('livewire-table::pagination.pagination') }}
</div>
