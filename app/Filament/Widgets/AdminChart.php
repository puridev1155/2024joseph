<?php

namespace App\Filament\Widgets;
use App\Models\Graduate;
use Illuminate\Support\Facades\DB;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class AdminChart extends ChartWidget
{
    protected static ?string $heading = '기수별 졸업자 수';

    protected static ?int $sort = 3;

    protected function getData(): array
    {
        // Query to get the count of graduates grouped by group_id
        $data = Graduate::select(DB::raw('count(*) as count, group_id'))
                        ->groupBy('group_id')
                        ->get();

        // Prepare the datasets and labels for the chart
        return [
            'datasets' => [
                [
                    'label' => '기수별 그룹',
                    'data' => $data->pluck('count'), // Pluck the counts for the dataset
                ],
            ],
            'labels' => $data->pluck('group_id'), // Pluck the group_ids for the labels
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
