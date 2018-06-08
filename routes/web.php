<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
	return view('index');
});

//----------------- BƯỚC 1: ----------------------------
// -----------------------------------------------------
// ---------------------HOMES---------------------------
		Route::get('/home-1-column', function(){
			return view('homes.home-1-column');
		});

		Route::get('/home-1-column-with-sidebar', function(){
			return view('homes.home-1-column-with-sidebar');
		});

		Route::get('/home-2-columns', function(){
			return view('homes.home-2-columns');
		});

		Route::get('/home-2-columns-with-sidebar', function(){
			return view('homes.home-2-columns-with-sidebar');
		});

		Route::get('/home-3-columns', function(){
			return view('homes.home-3-columns');
		});

//-----------------------------------------------------
//--------------------POSTS----------------------------
		Route::get('/post-detail', function(){
			return view('posts.detail');
		});

		Route::get('/post-with-right-sidebar', function(){
			return view('posts.detail_right_sidebar');
		});

		Route::get('/post-with-left-sidebar', function(){
			return view('posts.detail_left_sidebar');
		});

		Route::get('/post-list', function(){
			return view('posts.list');
		});

