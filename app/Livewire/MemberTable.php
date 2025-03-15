<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Member;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Enumerable;
use RamonRietdijk\LivewireTables\Actions\Action;
use RamonRietdijk\LivewireTables\Columns\BooleanColumn;
use RamonRietdijk\LivewireTables\Columns\Column;
use RamonRietdijk\LivewireTables\Columns\DateColumn;
use RamonRietdijk\LivewireTables\Columns\ImageColumn;
use RamonRietdijk\LivewireTables\Columns\SelectColumn;
use RamonRietdijk\LivewireTables\Filters\BooleanFilter;
use RamonRietdijk\LivewireTables\Filters\DateFilter;
use RamonRietdijk\LivewireTables\Filters\SelectFilter;
use RamonRietdijk\LivewireTables\Livewire\LivewireTable;



class MemberTable extends LivewireTable
{

    protected string $model = Member::class;

    protected function columns(): array
    {
        return [
            // ImageColumn::make(__('Photo'), 'photo'),
            Column::make(__('Actions'), function (Model $model): string {
                return '<a wire:navigate class="underline cursor-pointer" wire:click.prevent="view(' . $model->getKey() . ')"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-eye"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg></a>';
            })
            // Column::make(__('Actions'), function (Model $model): string {
            //     return '<a wire:navigate class="underline cursor-pointer" wire:click.prevent="view(' . $model->id . ')">
            //                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
            //                     <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            //                     <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
            //                     <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
            //                 </svg>
            //             </a>';
            // })
            ->clickable(false)
            ->asHtml(),
            
        

            // Column::make(__('Member ID'), 'member_id')
            // ->sortable()
            // ->searchable()
            // ->clickable(),

            Column::make(__('Lastname'), 'last_name' )
                ->sortable()
                ->searchable(fn ($query, $term) => 
                $query->whereRaw('UPPER(last_name) LIKE ?', ['%' . strtoupper($term) . '%'])
         ),
                

            Column::make(__('Firstname'), 'first_name')
                ->sortable()
                ->searchable(fn ($query, $term) => 
                $query->whereRaw('UPPER(first_name) LIKE ?', ['%' . strtoupper($term) . '%'])
            ),

            Column::make(__('AKA'), 'aka')
                ->sortable()
                ->searchable(fn ($query, $term) => 
                $query->whereRaw('UPPER(aka) LIKE ?', ['%' . strtoupper($term) . '%'])
            ),

            // Column::make(__('Chapter'), 'current_chapter')
            //     ->sortable(),
            SelectColumn::make(__('Current Chapter'), 'current_chapter')
            ->options(
                Member::query()->get()->pluck('current_chapter', 'current_chapter')->toArray()
            )
            ->sortable()
            ->searchable(fn ($query, $term) => 
            $query->whereRaw('UPPER(current_chapter) LIKE ?', ['%' . strtoupper($term) . '%'])
            ),

            Column::make(__('Root Chapter'), 'root_chapter')
                ->sortable()
                ->searchable(fn ($query, $term) => 
        $query->whereRaw('UPPER(root_chapter) LIKE ?', ['%' . strtoupper($term) . '%'])
        ),

            // Column::make(__('Actions'), function (Model $model): string {
            //     return '<a class="underline" href="#'.$model->getKey().'">VIEW</a>';
            // })
            //     ->clickable(false)
            //     ->asHtml(),

            Column::make(__('Status'), 'status')
            ->sortable()
            ->searchable(fn ($query, $term) => 
            $query->whereRaw('UPPER(status) LIKE ?', ['%' . strtoupper($term) . '%'])
        ),

        
            
        ];
    }


     public function view($memberId)
    {
        return redirect()->route('member-view', ['id' => $memberId]);
    }
}