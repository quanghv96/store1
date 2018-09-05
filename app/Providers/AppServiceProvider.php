<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; 
use App\Category;
use Illuminate\Support\Facades\View;
use App\Product;
use Cart;
use Illuminate\Support\Facades\Auth;
use App\Notification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        // $category = Category::all();
        // $product_sell = Product::getTopSell();
        // $cateS = Product::getAllCate();
        // $notification = Notification::getNotif();
        // $total_not = Notification::getTotal();
        // View::share(compact(
        //     [
        //         'category', 
        //         'product_sell',
        //         'notification',
        //         'total_not',
        //         'cateS'
        //     ]
        // ));
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
