<?php

namespace App\Filament\Widgets;

use App\Models\Member;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MemberStatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval='15s';

    protected static bool $isLazy = true;

    protected function getStats(): array
    {
        return [
            Stat::make(label: 'Total Members', value: Member::count()),
            Stat::make(label: 'Total Chapters', value: Member::distinct('current_chapter')->count()),
            Stat::make(label: 'Total Active Members', value: Member::where('status', 'active')->count()),
            // Stat::make('Bounce rate', '21%'),
            // Stat::make('Average time on page', '3:12'),
        ];
    }
}
