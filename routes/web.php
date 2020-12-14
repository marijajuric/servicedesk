<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AddressControler;
use App\Http\Controllers\CompanyControler;
use App\Http\Controllers\ContractControler;
use App\Http\Controllers\DeviceControler;
use App\Http\Controllers\GroupControler;
use App\Http\Controllers\NoteControler;
use App\Http\Controllers\RoleControler;
use App\Http\Controllers\ServiceControler;
use App\Http\Controllers\TicketControler;
use App\Http\Controllers\UserControler;




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

Route::resource('addresses', AddressControler::class);
Route::resource('companies', CompanyControler::class);
Route::resource('contracts', ContractControler::class);
Route::resource('devices', DeviceControler::class);
Route::resource('groups', GroupControler::class);
Route::resource('notes', NoteControler::class);
Route::resource('roles', RoleControler::class);
Route::resource('services', ServiceControler::class);
Route::resource('tickets', TicketControler::class);
Route::resource('users', UserControler::class);

