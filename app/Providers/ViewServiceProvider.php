<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(resource_path('2019/views'), '2019');
        $this->loadViewsFrom(resource_path('2021/views'), '2021');
        $this->loadViewsFrom(resource_path('2022/views'), '2022');
        $this->loadViewsFrom(resource_path('2023/views'), '2023');
    }
}
