<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\itemControlller;
use App\Http\Controllers\SignPadController;
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
    return view('frontend.index');
});
Route::get('/team', function () {
    return view('frontend.team');
});
Route::get('/courseDetail', function () {
    return view('frontend.courseDetail');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('contacts', [contactController::class,'show'])->name('contacts');
	Route::get('new/contacts', [contactController::class,'create'])->name('addContact');
	Route::post('new/contacts', [contactController::class,'store'])->name('addContact');
	Route::get('contact/edit/{id}', [contactController::class,'editView'])->name('contact.edit');
	Route::post('contact/edit', [contactController::class,'editContact'])->name('edit.contact');
	Route::get('contact/delete/{id}', [contactController::class,'deleteContact'])->name('deleteContact');



	Route::get('items', [itemControlller::class,'show'])->name('items');
	Route::get('new/items', [itemControlller::class,'create'])->name('addItems');
	Route::get('invoices', [invoiceController::class,'show'])->name('invoices');
	Route::get('new/invoices', [invoiceController::class,'create'])->name('addInvoices');
	Route::get('new/DelivertNote', [invoiceController::class,'newDelivertNote'])->name('newDelivertNote');
	Route::post('new/DelivertNote', [invoiceController::class,'store'])->name('saveDeliveryNote');
	Route::get('note/edit/{id}', [invoiceController::class,'editNote'])->name('editNote');
	Route::post('note/edit', [invoiceController::class,'updateNote'])->name('updateNote');
	Route::get('/search/{name}', [invoiceController::class,'search'])->name('contact.search');
	Route::get('note/print/{id}', [invoiceController::class,'printDeliveryNote']);
	Route::get('print/{id}', [invoiceController::class,'print'])->name('printing');

	

Route::get('signpad', [SignPadController::class, 'index']);
Route::post('signpad', [SignPadController::class, 'save'])->name('signpad.save');
	

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

