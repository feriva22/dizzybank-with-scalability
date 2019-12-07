<?php
Auth::routes(['register' => false]);

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    // Dash
    Route::get('/')->uses('DashboardController')->name('dashboard');

    Route::get('/accounts')->uses('AccountsController@show')->name('accounts.show');
});
