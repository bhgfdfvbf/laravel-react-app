<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/hello', function () {
    return response()->json(['message' => 'Hello, World!']);
});
Route::get('/api/greet/{name}', function ($name) {
    return response()->json(['message' => 'Hello, ' . $name . '!']);
});
Route::get('/api/greet/{name}/{age}', function ($name, $age) {
    return response()->json(['message' => 'Hello, ' . $name . '! You are ' . $age . ' years old.']);
});