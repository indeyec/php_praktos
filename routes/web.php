<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup'])->middleware('auth');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add(['GET', 'POST'], '/subdivision', [Controller\Site::class, 'subdivision'])->middleware('auth');
Route::add(['GET', 'POST'], '/room', [Controller\Site::class, 'room'])->middleware('auth');
Route::add(['GET', 'POST'], '/room_add', [Controller\Site::class, 'room_add'])->middleware('auth');
Route::add(['GET', 'POST'], '/vid_room_add', [Controller\Site::class, 'vid_room_add'])->middleware('auth');
Route::add(['GET', 'POST'], '/subdivision_add', [Controller\Site::class, 'subdivision_add'])->middleware('auth');
Route::add(['GET', 'POST'], '/vid_subdivision_add', [Controller\Site::class, 'vid_subdivision_add'])->middleware('auth');
Route::add(['GET', 'POST'], '/user_num', [Controller\Site::class, 'user_num'])->middleware('auth');
Route::add(['GET', 'POST'], '/profile', [Controller\Site::class, 'profile'])->middleware('auth');
Route::add('GET', '/logout', [Controller\Site::class, 'logout'])->middleware('auth');
Route::add(['GET', 'POST'], '/add_user', [Controller\Site::class, 'add_user'])->middleware('auth');
Route::add(['GET', 'POST'], '/search', [Controller\Site::class, 'search'])->middleware('auth');


