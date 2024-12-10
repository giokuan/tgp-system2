<?php

namespace App\Filament\Resources\OfficerResource\Pages;

use App\Filament\Resources\OfficerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditOfficer extends EditRecord
{
    protected static string $resource = OfficerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->visible(fn() => Auth::user()->user_type === 'admin'),
        ];
    }
}
