<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use GrassFeria\Starterkid\Livewire\User\UserEdit;
use GrassFeria\Starterkid\Livewire\User\UserIndex;
use GrassFeria\Starterkid\Livewire\User\UserCreate;
use GrassFeria\Starterkid\Livewire\Setting\SettingEdit;
use GrassFeria\Starterkid\Livewire\Setting\SettingPlugin;
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
    Route::get('/dashboard/settings/edit/{id}',SettingEdit::class)->name('settings.edit');
    Route::get('/dashboard/settings/plugins',SettingPlugin::class)->name('settings.plugin');
    Route::get('/dashboard/users',UserIndex::class)->name('users.index');
    Route::get('/dashboard/users/create',UserCreate::class)->name('users.create');
    Route::get('/dashboard/users/edit/{recordId}',UserEdit::class)->name('users.edit');

    
   


    


   
});
