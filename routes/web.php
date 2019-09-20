<?php

Route::get('/', function () {
    return view('master-layout');
});
Route::get('trangchu', function () {
    return view('page.trangchu');
});