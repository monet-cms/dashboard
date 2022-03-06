<?php

namespace Monet\Framework\Dashboard;

use Illuminate\Support\Facades\Request;
use Livewire\Livewire;
use Monet\Framework\Auth\Models\User;
use Monet\Framework\Dashboard\Http\Livewire\DummyTile;
use Monet\Framework\Dashboard\Models\Dashboard;
use Monet\Framework\Support\Services\Package;
use Monet\Framework\Support\Services\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('monet.dashboard')
            ->hasViews()
            ->hasMigrations([
                'create_dashboards_table',
                'create_dashboard_tiles_table',
            ]);
    }

    protected function packageRegistered(): void
    {
        User::extend('dashboards', function () {
            return $this->hasMany(Dashboard::class);
        });

        User::extend('getActiveDashboardAttribute', function () {
            return $this->dashboards()->where('active', '=', 1)->first();
        });
    }

    protected function packageBooted(): void
    {
        $this->registerLivewireComponents();

        Request::macro('test', function () {
            echo 'I am working!';
        });
    }

    protected function registerLivewireComponents(): void
    {
        Livewire::component('monet.dashboard::dummy-tile', DummyTile::class);
    }
}