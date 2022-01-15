<?php

use Illuminate\Support\Facades\Route;

Route::get('switchto/{emailOrId}', [\Benjaminniess\UserSwitcher\SwitchToController::class, 'switchTo']);
