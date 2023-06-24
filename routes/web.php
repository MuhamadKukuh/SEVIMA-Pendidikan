<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\ClientController;
use App\Models\Subject;
use Illuminate\Support\Facades\Route;

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

Route::resource('/', ClientController::class);
Route::get('/materi', [ClientController::class, 'MaterialsIndex']);
Route::get('/materi/{material:material_title}', [ClientController::class, 'ShowMaterial'])->name('showMaterial');

Route::group(["middleware" => "guest"], function(){
    Route::get('/login', [AuthenticateController::class, 'loginIndex'])->name('loginIndex');
    Route::post('/login', [AuthenticateController::class, 'loginProccess'])->name('loginProccess');
    Route::get('/register', [AuthenticateController::class, 'registerIndex'])->name('registerIndex');
    Route::post('/register', [AuthenticateController::class, 'registerProccess'])->name('registerProccess');
});

Route::group(['middleware' => "auth"], function(){
    Route::get('/logout', [AuthenticateController::class, 'logout'])->name('logout');
});


Route::prefix('dashboard')->group(function(){
    Route::get('/', function(){
        return view('Admin.Index', );
    });
});
