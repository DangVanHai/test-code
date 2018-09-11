<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\model\backend\CaloteryModel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Schema::defaultStringLength(191);
      $cate['cate_parents'] = CaloteryModel::Where('cate_level',0)->orderby('cate_id','asc')->get();
      $cate['cate_childrens'] = CaloteryModel::Where('cate_main','children')->orderby('cate_id','asc')->get();
      view()->share($cate);

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
