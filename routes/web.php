<?php

use App\Http\Controllers\Contacts\{
    ListContactsController,
    CreateContactController,
    StoreContactController,
    EditContactController,
    UpdateContactController,
    DeleteContactController
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('contacts')->name('contacts.')->group(function () {
    Route::get('/', ListContactsController::class)->name('index');
    Route::get('/create', CreateContactController::class)->name('create');
    Route::post('/', StoreContactController::class)->name('store');
    Route::get('/{contact}/edit', EditContactController::class)->name('edit');
    Route::put('/{contact}', UpdateContactController::class)->name('update');
    Route::delete('/{contact}', DeleteContactController::class)->name('destroy');
});
