<?php

namespace App\Filament\Resources\StudentResource\Widgets;

use App\Models\Student;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StudentOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalStudent = Student::all()->count();
        return [
            Stat::make('Total Student', $totalStudent),
            // Stat::make('Bounce rate', '21%'),
            // Stat::make('Average time on page', '3:12'),
        ];
    }
}
