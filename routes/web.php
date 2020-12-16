<?php

use App\Http\Controllers\ViewController;
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

Route::get('/', [ViewController::class, 'home']);
Route::get('/pets', [ViewController::class, 'pets']);
Route::get('/pets/feeling-lucky', [ViewController::class, 'feelingLucky']);
Route::get('/pets/{id}', [ViewController::class, 'pet']);
