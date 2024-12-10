<?php

namespace App\Filament\Resources\OfficerResource\Pages;

use App\Filament\Resources\OfficerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateOfficer extends CreateRecord
{
    protected static string $resource = OfficerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->visible(fn() => Auth::user()->user_type === 'admin'),
        ];
    }
}
