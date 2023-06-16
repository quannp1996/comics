<?php

namespace Apiato\Core\Traits\Model;

use App\Containers\BaseContainer\Enums\BaseEnum;
use Carbon\Carbon;

trait TraitDistanceTimeModel
{
    public function getDistanceTime()
    {
        $now = Carbon::now();
        $from = Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at);
        if ($months = $now->diffInMonths($from)) return sprintf('%s ' . __('site.thangtruoc'), $months);
        if ($days = $now->diffInDays($from)) return sprintf('%s ' . __('site.ngaytruoc'), $days);
        if ($hours = $now->diffInHours($from)) return sprintf('%s ' . __('site.giotruoc'), $hours);
        if ($minutes = $now->diffInMinutes($from)) return sprintf('%s ' . __('site.phuttruoc'), $minutes);
        return __('site.vuaxong');
    }
}
