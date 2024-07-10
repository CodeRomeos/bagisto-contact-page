<?php

use Illuminate\Support\Facades\Route;
use CodeRomeos\BagistoContactPageEnquiries\Http\Controllers\Shop\BagistoContactPageEnquiriesController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency'], 'prefix' => 'bagistocontactpageenquiries'], function () {
    Route::get('', [BagistoContactPageEnquiriesController::class, 'index'])->name('shop.bagistocontactpageenquiries.index');
});