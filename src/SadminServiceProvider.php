<?php

namespace OmerKamcili\Sadmin;

use Illuminate\Support\ServiceProvider;

/**
 * Class SadminServiceProvider
 * @package OmerKamcili\Sadmin
 */
class SadminServiceProvider extends ServiceProvider
{

    /**
     * Boot
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/sadmin.php', 'sadmin');
        $this->loadViewsFrom(__DIR__ . '/views', 'sadmin');
    }
}
