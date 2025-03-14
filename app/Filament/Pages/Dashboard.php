<?php

namespace App\Filament\Pages;

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\MemberStatsOverview;

class Dashboard extends BaseDashboard
{
    protected function getHeaderWidgets(): array
    {
        return [
            // MemberStatsOverview::class, // Use getHeaderWidgets() instead of getWidgets()
            
            ];
    }
}

