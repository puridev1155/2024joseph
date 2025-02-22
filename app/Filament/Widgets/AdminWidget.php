<?php

namespace App\Filament\Widgets;
use App\Models\Ask;
use App\Models\User;
use App\Models\Application;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $maxGroupId = Application::max('group_id');
        return [
            Stat::make('가입자 수', User::count())
            ->description('신규 회원 가입 현황')
            ->chart([1,3,5,10,20,40])
            ->color('danger'),
            Stat::make('장학금 신청자 총 수', Application::count())
            ->description('최근 장학금 신청 현황')
            ->chart([1,3,5,10,20,40])
            ->color('success'),
            Stat::make($maxGroupId .'기 최근 신청자 수', Application::where('group_id', $maxGroupId)->count())
            ->description('최근 장학금 신청 현황')
            ->chart([1,3,5,10,20,40])
            ->color('success'),
            Stat::make('질문접수 수', Ask::count())
            ->description('신규 질문 현황')
            ->chart([1,3,5,10,20,40])
        ];
    }
}
