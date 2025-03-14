<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class InfoOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Important Reminder for Moderators', 'Please be advised:')
            -> description('As a moderator, you have access to sensitive information within this system. Every action you take is crucial in ensuring the integrity, privacy, and trust within our brotherhood. Please handle all data with care and responsibility, keeping in mind the impact your actions may have on fellow members.'),
            Stat::make('Important Reminder for Moderators', 'Policy Note:')
            -> description('Unauthorized sharing, editing, or misuse of sensitive data is strictly 
                prohibited and may lead to consequences aligned with our community values. Thank you for your commitment to upholding the 
                trust and respect within our brotherhood.'),
           
        ];
    }
}
