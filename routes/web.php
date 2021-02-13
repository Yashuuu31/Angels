<?php

use App\Http\Controllers\MenuSettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('layout.master');
});

Route::resource('menu_settings', MenuSettingController::class);