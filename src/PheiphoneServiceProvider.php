<?php

namespace Pheicloud\Pheiphone;

use Illuminate\Support\ServiceProvider;

class PheiphoneServiceProvider extends ServiceProvider
{
    /**
     * 在注册后进行服务的启动
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('pheiphone', function () {
            return new Pheiphone;
        });
    }
}
