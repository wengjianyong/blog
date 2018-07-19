<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * 设定容器绑定的对应关系
     *
     * @var array
     */
    public $bindings = array(
        \App\Repositories\Contracts\SettingRepository::class => \App\Repositories\Eloquent\SettingRepositoryEloquent::class,
    );
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
