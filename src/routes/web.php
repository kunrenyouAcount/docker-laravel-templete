<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $test = "テスト";
    $debug = "デバッグ";
    $testOfDebug = "${debug}の${test}用です！！！";
    return view('welcome');
});
