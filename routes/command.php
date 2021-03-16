<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/migrate', function (Request $request) {
    try {
        \Artisan::call('migrate', ['--path' => 'database/migrations', '--force' => true]);
        return response()->json(['message' => 'migrated'], 200);
    } catch (\Exception $e) {
        return response()->json($e->getMessage(), 500);
    }
});
