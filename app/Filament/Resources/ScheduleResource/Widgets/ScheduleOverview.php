<?php

namespace App\Filament\Resources\ScheduleResource\Widgets;

use App\Models\Schedule;
use Carbon\Carbon;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\TableWidget as BaseWidget;

class ScheduleOverview extends BaseWidget
{

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Schedule::where('day',Carbon::today()->dayName)
            )
            ->columns([
                Tables\Columns\TextColumn::make('classroom.name')
                ->searchable(),
            Tables\Columns\TextColumn::make('subject.name')
                ->searchable(),
            Tables\Columns\TextColumn::make('teacher.name')
                ->searchable(),
            Tables\Columns\TextColumn::make('day')
                ->searchable(),
            Tables\Columns\TextColumn::make('start_time'),
            Tables\Columns\TextColumn::make('end_time'),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            ]);
    }
    // protected function getStats(): array
    // {
    //     return [
    //         Stat::make('Unique views', '192.1k'),
    //         Stat::make('Bounce rate', '21%'),
    //         Stat::make('Average time on page', '3:12'),
    //     ];
    // }
}
