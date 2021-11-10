<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TypeaheadController;
use App\Http\Controllers\IncomeTypeController;
use App\Http\Controllers\SavingsController;
use App\Http\Controllers\AddSavingsController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/', function () {
//     return view('dashboard');
// });

// DashboardController

// Route::get('/', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
// Route::get('add-income', [IncomeTypeController::class, 'index'])->middleware(['auth'])->name('add-income');
// Route::post('/add-income',[IncomeTypeController::class, 'store'])->middleware(['auth']);



// Route::get('new-entry', [TrackController::class, 'index'])->middleware(['auth'])->name('newEntry');
// Route::post('/add',[TrackController::class, 'store'])->middleware(['auth']);

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('add-income', [IncomeTypeController::class, 'index'])->name('add-income');
Route::post('/add-income',[IncomeTypeController::class, 'store']);
Route::get('set-saving', [SavingsController::class, 'index'])->name('set-saving');
Route::get('add-saving', [AddSavingsController::class, 'index'])->name('add-saving');





Route::get('new-entry', [TrackController::class, 'index'])->name('newEntry');
Route::post('/add',[TrackController::class, 'store']);

Route::get('/autocomplete-search', [TypeaheadController::class, 'autocompleteProductSearch']);

require __DIR__.'/auth.php';


