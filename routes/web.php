<?php

use App\Http\Controllers\BuyersController;
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

Route::get('/customers', [BuyersController::class, 'showFiltered']);

Route::get('/customers/{id}', [BuyersController::class, 'showOne']);
