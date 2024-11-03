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
        

            Column::make(__('Member ID'), 'member_id')
            ->sortable()
            ->searchable()
            ->clickable(),

            Column::make(__('Lastname'), 'last_name' )
                ->sortable()
                ->searchable(),
                

            Column::make(__('Firstname'), 'first_name')
                ->sortable()
                ->searchable(),

            Column::make(__('AKA'), 'aka')
                ->sortable()
                ->searchable(),

            // Column::make(__('Chapter'), 'current_chapter')
            //     ->sortable(),
            SelectColumn::make(__('Current Chapter'), 'current_chapter')
            ->options(
                Member::query()->get()->pluck('current_chapter', 'current_chapter')->toArray()
            )
            ->sortable()
            ->searchable(),

            Column::make(__('Root Chapter'), 'root_chapter')
                ->sortable()
                ->searchable(),

            // Column::make(__('Actions'), function (Model $model): string {
            //     return '<a class="underline" href="#'.$model->getKey().'">VIEW</a>';
            // })
            //     ->clickable(false)
            //     ->asHtml(),
            Column::make(__('Actions'), function (Model $model): string {
                return '<a wire:navigate class="underline cursor-pointer" wire:click.prevent="view(' . $model->getKey() . ')">VIEW</a>';
            })
            ->clickable(false)
            ->asHtml(),
            
            
        ];
    }


     public function view($memberId)
    {
        return redirect()->route('member-view', ['id' => $memberId]);
    }
}