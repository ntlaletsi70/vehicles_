<?php
use App\Http\Controllers\VehiclesController;
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
//     return view('welcome');
// });

// Route::controller(VehiclesController::class)->group(function () {
//     Route::get('/vehicles', 'index');
//     Route::get('/orders/{id}', 'create');
//     Route::get('/orders/{id}', 'show');
//     Route::post('/orders', 'store');
// });

Route::resource('vehicles',VehiclesController::class);
