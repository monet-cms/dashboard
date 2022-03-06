<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    $dashboard = auth()->user()->active_dashboard;

    return view('monet.dashboard::dashboard', [
        'dashboard' => $dashboard
    ]);
})->middleware('auth')->name('dashboard');