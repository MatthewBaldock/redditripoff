<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Page;
use Illuminate\Support\Facades\DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         view()->composer('*', function ($view)
        {
			$view->with('pageLinks', DB::select(DB::raw("SELECT * FROM page")));
		});
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
