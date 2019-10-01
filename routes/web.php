<?php

Route::get('/', function () {
    return view('page.trangchu');
});
Route::get('trangchu', function () {
    return view('page.trangchu');
});
Route::get('quangcao', function () {
    return view('page.quangcao');
});
Route::get('quangcao_anhsieunet', function () {
    return view('page.quangcao_anhsieunet');
});
Route::get('quangcao_bienbat', function () {
    return view('page.quangcao_bienbat');
});
Route::get('quangcao_bienled', function () {
    return view('page.quangcao_bienled');
});
Route::get('quangcao_alu', function () {
    return view('page.quangcao_alu');
});
Route::get('quangcao_gianhang', function () {
    return view('page.quangcao_gianhang');
});
Route::get('quangcao_bienbao', function () {
    return view('page.quangcao_bienbao');
});
Route::get('quangcao_anhsang', function () {
    return view('page.quangcao_anhsang');
});
Route::get('quangcao_bienten', function () {
    return view('page.quangcao_bienten');
});
Route::get('quangcao_decan', function () {
    return view('page.quangcao_decan');
});
Route::get('inan', function () {
    return view('pageinan.inan');
});
Route::get('tuvan', function () {
    return view('vu.tuvan');
});