<?php

namespace Monet\Framework\Dashboard;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Request::macro('test', function () {
            echo 'I am working!';
        });
    }
}