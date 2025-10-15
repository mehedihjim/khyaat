<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/setup-database', function () {
    try {
        Artisan::call('migrate:fresh', ['--force' => true]);
        return 'Database setup complete! Tables created: ' . Artisan::output();
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});

Route::get('/', function () {
    return view('welcome');
});
