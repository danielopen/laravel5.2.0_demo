<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use App\Services\Web\Contracts\TestContract;
use App\Services\TestService;

class TestServiceProvider extends ServiceProvider
{

    /**
     * 服务提供者加是否延迟加载.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        //dd(11);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //dd(121213434);

        //
        /*$this->app->singleton('webTest',function(){

            return new TestService();
        });*/

        $this->app->bind('abcd',function(){
            return new TestService();
        });
    }

    /**
     * 获取由提供者提供的服务.
     *
     * @return array
     */
    public function provides()
    {
        return ['abcd'];
    }
}
