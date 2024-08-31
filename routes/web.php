<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/emp', function () {
    return view('empform');
});
// Route::post('/add_emp', 'EmpController@create');
// Route::post('/create','EmpController@create');
Route::post('create', [EmpController::class, 'create']);
Route::get('/emplist', [EmpController::class, 'list']);

