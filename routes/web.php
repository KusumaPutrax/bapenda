<?php

use App\Http\Controllers\QuisionerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Kritik_dan_Saran_Desain2');
    // return view('quisioner.create');
});


Route::resource('quisioner', QuisionerController::class);
