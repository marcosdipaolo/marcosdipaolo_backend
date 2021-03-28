<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class CommandController extends Controller
{
    /**
     * @return Application|ResponseFactory|Response
     */
    public function routesCache()
    {
        try {
            \Artisan::call('route:cache');
            return response(['message' => 'routes cached'], 200);
        } catch (\Exception $e) {
            return response($e->getMessage(), 500);
        }
    }

    /**
     * @return Application|ResponseFactory|Response
     */
    public function configCache()
    {
        try {
            \Artisan::call('config:cache');
            return response(['message' => 'configs cached'], 200);
        } catch (\Exception $e) {
            return response($e->getMessage(), 500);
        }
    }

    /**
     * @return Application|ResponseFactory|Response
     */
    public function clearCache()
    {
        try {
            \Artisan::call('cache:clear');
            return response(['message' => 'Cache cleared'], 200);
        } catch (\Exception $e) {
            return response($e->getMessage(), 500);
        }
    }

    /**
     * @return Application|ResponseFactory|Response
     */
    public function clearView()
    {
        try {
            \Artisan::call('view:clear');
            return response(['message' => 'Views cleared'], 200);
        } catch (\Exception $e) {
            return response($e->getMessage(), 500);
        }
    }

    /**
     * @return Application|ResponseFactory|Response
     */
    public function migrate()
    {
        try {
            \Artisan::call('migrate', ['--path' => 'database/migrations', '--force' => true]);
            return response(['message' => 'migrated'], 200);
        } catch (\Exception $e) {
            return response($e->getMessage(), 500);
        }
    }

    /**
     * @return Application|ResponseFactory|Response
     */
    public function storageLink()
    {
        try {
            \Artisan::call('storage:link App/Post');
            return response(['message' => 'linked'], 200);
        } catch (\Throwable $e) {
            return response($e->getMessage(), 500);
        }
    }

}
