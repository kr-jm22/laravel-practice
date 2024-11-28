<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade as Facade;

class Blade extends ServiceProvider{
    public function boot(){

        Facade::directive('isOfficeIp', function () {
            return "<?php if (\App\Utilities\Info::isOfficeIp()): ?>";
        });

        Facade::directive('endisOfficeIp', function () {
            return "<?php endif; ?>";
        });

    }
    public function register(){

    }
}
