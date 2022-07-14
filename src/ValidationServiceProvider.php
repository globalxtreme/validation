<?php

namespace GlobalXtreme\Validation;

use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../stubs/request.stub' => base_path('stubs'),
        ],'globalxtreme-validation');
    }

    public function register()
    {
        //
    }
}
