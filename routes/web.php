<?php

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

// Route::get('/', function () {
//     return view('Clients.Index', [
//         "subjects" => Subject::all()
//     ]);
// });
Route::resource('/', ClientController::class);
Route::get('/materi', [ClientController::class, 'MaterialsIndex']);
Route::get('/materi/{material:material_title}', [ClientController::class, 'ShowMaterial'])->name('showMaterial');

// Route::prefix('/')->group(function(){
// });

Route::prefix('dashboard')->group(function(){
    Route::get('/', function(){
        return view('Admin.Index', );
    });
});
