<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use GrassFeria\Starterkid\Http\Controllers\StreamController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/stream/files/{media}/{recordId}', [StreamController::class,'stream'])->name('stream.files');
    Route::get('/files/{media}/{recordId}', [StreamController::class,'stream'])->name('stream.files');
    
   


    


   
});
