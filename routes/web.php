<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;




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

Route::resource('addresses', AddressController::class);
Route::resource('companies', CompanyController::class);
Route::resource('contracts', ContractController::class);
Route::resource('devices', DeviceController::class);
Route::resource('groups', GroupController::class);
Route::resource('notes', NoteController::class);
Route::resource('roles', RoleController::class);
Route::resource('services', ServiceController::class);
Route::resource('tickets', TicketController::class);
Route::resource('users', UserController::class);

