<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SponsorsController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/client', [PagesController::class, 'client']);
Route::get('/sponsor', [PagesController::class, 'sponsor']);
Route::post('/createS',[SponsorsController::class, 'create']);
Route::post('/createC',[ClientsController::class,'create_cl']);
Route::get('/memberList',[PagesController::class,'memberList']);
Route::get('/sponsorList',[SponsorsController::class,'show']);
Route::get('/clientList',[ClientsController::class,'show']);
