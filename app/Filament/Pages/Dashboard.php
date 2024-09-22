<?php

namespace App\Filament\Pages;

use App\Filament\Resources\ScheduleResource\Widgets\ScheduleOverview;
use App\Filament\Resources\StudentResource\Widgets\StudentOverview;
use Filament\Pages\Page;
use Filament\Actions\Action;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.dashboard';
    public function getHeaderWidgetsColumns(): int | array
    {
        return 1;
    }
    protected function getHeaderWidgets(): array
    {

        return [
            StudentOverview::class,
            ScheduleOverview::class,

        ];
    }
}
