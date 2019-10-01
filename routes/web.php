<?php

Route::get('/', function () {
    return view('page.trangchu');
});
Route::get('trangchu', function () {
    return view('page.trangchu');
});


Route::get('tuvan', function () {
    return view('vu.tuvan');
});