<?php

namespace App\Providers;

use App\Ordering\FoodMenu;
use Revolution\Ordering\Contracts\Menu\MenuData;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->scoped(MenuData::class, FoodMenu::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
