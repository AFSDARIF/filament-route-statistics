<?php

namespace Afsdarif\FilamentRouteStatistics;

use Afsdarif\FilamentRouteStatistics\Pages\RouteStatistics;
use Afsdarif\FilamentRouteStatistics\Widgets\RouteStatisticsOverview;
use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentRouteStatisticsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-route-statistics';
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public function register(Panel $panel): void
    {
        $panel
            ->pages([
                RouteStatistics::class
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
