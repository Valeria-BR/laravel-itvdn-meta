<?php
/**
 * Created by PhpStorm.
 * User: Support
 * Date: 31.10.2019
 * Time: 11:10
 */

namespace borschova\Meta;

use Illuminate\Support\ServiceProvider;


class MetaServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {$this->app->singelton('meta', function ($app){
        $meta = new MetaService('test');
        return $meta;
    });
    }
}