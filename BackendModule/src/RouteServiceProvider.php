<?php
namespace BackendModule;

use Illuminate\Support\Facades\Route;
use ModelManagerModule\Config;

class RouteServiceProvider extends \App\Providers\RouteServiceProvider
{
    protected $namespace = "BackendModule\Controllers";

    public function boot()
    {
        parent::boot();
        Route::bind('config', function ($value) {
            return Config::findOrFail($value);
        });
    }

    protected function mapWebRoutes()
    {
        Route::any('login', $this->namespace."\AuthController@login")->name('login')->middleware('web');
        Route::group([
            'middleware' => ['admin','web'],
            'namespace' => $this->namespace,
            'prefix' => 'admin'
        ], function () {
            Route::resource('config','ConfigController');
        });
    }
}