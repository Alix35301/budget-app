<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\TypeaheadController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('new-entry', [TrackController::class, 'index'])->middleware(['auth']);
Route::post('/new-entry',[TrackController::class, 'store'])->middleware(['auth']);

Route::get('/autocomplete-search', [TypeaheadController::class, 'autocompleteProductSearch']);

require __DIR__.'/auth.php';


