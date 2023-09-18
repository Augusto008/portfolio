<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Views\ViewMainController as ViewMain;

// Route::get('/', function () { return redirect()->to('/en'); });
Route::get('/', function() {
    $browserLang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    $exploded = explode(',', $browserLang);
    $lang = substr($exploded[0], 0, 2);
    return redirect()->to("/$lang");
});
Route::get('/{lang}', [ViewMain::class, 'main']);
