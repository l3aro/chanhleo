<?php

namespace App\Filament\Resources\AttendanceResource\Widgets;

use App\Models\Attendance;
use Filament\Widgets\StatsOverviewWidget as Widget;
use Filament\Widgets\StatsOverviewWidget\Card;

class AttendanceOverview extends Widget
{
    protected static ?int $sort = 0;

    protected function getCards(): array
    {
        return [
            Card::make('Total', Attendance::query()->count())
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),
            Card::make('New attendances', Attendance::query()->where('created_at', '>', now()->subDay())->count())
                ->color('danger'),
        ];
    }
}
