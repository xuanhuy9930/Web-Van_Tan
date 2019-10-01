<?php

Route::get('/', function () {
    return view('page.trangchu');
});
Route::get('trangchu', function () {
    return view('page.trangchu');
});
Route::get('inan', function () {
    return view('pageinan.inan')
};
Route::get('tuvan', function () {
    return view('vu.tuvan');
});