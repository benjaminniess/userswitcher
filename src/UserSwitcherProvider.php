<?php

namespace Benjaminniess\UserSwitcher;

use Illuminate\Support\ServiceProvider;

class UserSwitcherProvider extends ServiceProvider
{
    public function register()
    {
        include __DIR__ . '/Routes.php';
    }

    public function boot()
    {

    }
}
