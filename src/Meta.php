<?php
/**
 * Created by PhpStorm.
 * User: Support
 * Date: 31.10.2019
 * Time: 11:10
 */

namespace borschova\Meta;

use Illuminate\Support\Facades\Facade;

class Meta extends Facade
{
    protected static function getFacadeAccessor()
    {return 'meta';}
}