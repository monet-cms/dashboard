<?php

namespace Monet\Framework\Dashboard;

use Illuminate\Support\Facades\Request;
use Monet\Framework\Support\Services\Package;
use Monet\Framework\Support\Services\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('monet.dashboard');
    }

    protected function packageBooted(): void
    {
        Request::macro('test', function () {
            echo 'I am working!';
        });
    }
}