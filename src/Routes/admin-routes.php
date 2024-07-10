<?php

use Illuminate\Support\Facades\Route;
use CodeRomeos\BagistoContactPageEnquiries\Http\Controllers\Admin\BagistoContactPageEnquiriesController;

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin/bagistocontactpageenquiries'], function () {
    Route::controller(BagistoContactPageEnquiriesController::class)->group(function () {
        Route::get('', 'index')->name('admin.bagistocontactpageenquiries.index');
    });
});