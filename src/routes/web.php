<?php

use Nishima\Hellouser\Hello;
use Illuminate\Support\Facades\Route;

Route::get('hello/{user}', function ($user) {
    $hello = new Hello();
    return $hello->user($user);
});
