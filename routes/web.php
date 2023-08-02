<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller\GRNmanageController;

use App\Http\Controllers\OrderController;


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

//GRN
Route::get('/addGRN', function () {
    return View::make('addGRN');
});

Route::get('/addGRN', [\App\Http\Controllers\grnController::class, 'selectProduct']);


//ORDER
Route::get('/create',[OrderController::class, 'index']);

Route::get('/welcome',[OrderController::class, 'welcome']);

Route::post('/upload',[OrderController::class, 'upload']);

Route::get('/display',[OrderController::class, 'view']);

Route::get('/delete/{id}',[OrderController::class, 'delete']);

Route::get('/search',[OrderController::class, 'search']);

Route::get('/update_view/{id}',[OrderController::class, 'update_view']);

Route::post('/update/{id}',[OrderController::class, 'update']);

Route::get('/print_pdf/{id}',[OrderController::class, 'print_pdf']);

