<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Artisan;

Route::get('/test', function () {
    Artisan::call('db:seed', [
        '--class' => 'DatabaseSeeder',
    ]);

    return response()->json(['message' => '✅ Seeder تم تنفيذه بنجاح']);
});

Route::get('/', function () {
    return view('welcome');
});

