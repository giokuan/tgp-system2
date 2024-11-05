<div class="flex gap-3">
    <input type="search"
        placeholder="@lang('Search...')"
        class="w-full md:w-64 border border-neutral-200  shadow-sm rounded-md outline-none focus:border-yellow-500 px-3 py-2  text-black transition ease-in-out dark:bg-neutral-800 dark:border-neutral-700 dark:focus:border-blue-600 dark:text-white"
        wire:model.live.debounce.500ms="globalSearch">
    @includeWhen($this->canClearSearch(), 'livewire-table::bar.buttons.clear-search')
</div>
