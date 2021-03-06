<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/{timezone?}', function ($timezone = null) {
    if (!empty($timezone)) {

        $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));

        $time->setTimezone(new DateTimeZone(str_replace('-', '/', $timezone)));

        echo 'Múi giờ bạn chọn ' . $timezone . ' hiện tại đang là: ' . $time->format('d-m-Y H:i:s');
    }
    return view('index');
});


Route::prefix('customer')->group(function () {
    Route::get('index', function () {
        return view('modules.customer.index');
    });

    Route::get('create', function () {
    });

    Route::post('store', function () {
    });

    Route::get('{id}/show', function () {
    });

    Route::get('{id}/edit', function () {
    });

    Route::patch('{id}/update', function () {
    });

    Route::delete('{id}', function () {
    });
});

Route::get('index', function () {
    return view('modules.customer.index');
});
