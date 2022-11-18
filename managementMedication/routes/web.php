<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ConsomationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicamentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Should be connected to navigate into below routes:
Route::middleware(['auth'])->group(function(){

    // Route::view('/','index')->name('dashboard');


    Route::get('/', [HomeController::class, 'home']);
    Route::get('dashboard', [HomeController::class, 'home'])->name('dashboard');


    Route::middleware('AuthAccess:Manager')->group(function(){
        Route::resource('categorie', CategorieController::class);
        Route::resource('medicament', MedicamentController::class);
        Route::resource('consomation', ConsomationController::class);
    });

    Route::middleware('AuthAccess:Admin')->group(function(){

    });

    Route::middleware('AuthAccess:User')->group(function(){

    });


});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
