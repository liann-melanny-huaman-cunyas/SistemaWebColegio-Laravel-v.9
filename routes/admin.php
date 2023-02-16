<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HoneController;

//Route::get('admin',[HoneController::class,'index']);

Route::get('admin', function (){
    return 'Cassie';
});