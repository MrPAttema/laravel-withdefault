<?php

namespace MrPAttema\withDefault;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class BelongsToWithDefaultServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        $this->package('mrpattema/laravel-withdefault');

        AliasLoader::getInstance()->alias('BelongsToWithDefault', 'MrPAttema\BelongsTo\BelongsToWithDefault');
    }
}
