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
Route::group(['namespace' => 'Main'], function() {

	Route::get('', 'IndexController')->name('main.index');

});
Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function() {

	Route::get('', 'IndexController')->name('post.index');
	Route::get('{id}', 'ShowController')->name('post.show');
	
	Route::group(['namespace' => 'Comment', 'prefix' => '{id}/comments'], function() {
		Route::post('', 'StoreController')->name('post.comment.store');
	});

	Route::group(['namespace' => 'Like', 'prefix' => '{id}/likes'], function() {
		Route::post('', 'StoreController')->name('post.like.store');
	});
});

Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function() {

	Route::get('', 'IndexController')->name('category.index');

	Route::group(['namespace' => 'Post', 'prefix' => '{category}/posts'], function() {
		Route::get('', 'IndexController')->name('category.post.index');
	});

});


Route::group(['namespace' => 'Personal', 'prefix' => 'personal', 'middleware' => ['auth']], function() {

	Route::group(['namespace' => 'Main'], function() {

		Route::get('', 'IndexController')->name('personal.index');
	});

	Route::group(['namespace' => 'Like', 'prefix' => 'likes'], function() {

		Route::get('', 'IndexController')->name('personal.like.index');
		Route::delete('/{id}', 'DeleteController')->name('personal.like.delete');
	});

	Route::group(['namespace' => 'Comment', 'prefix' => 'commentaries'], function() {

		Route::get('', 'IndexController')->name('personal.comment.index');
		Route::get('{id}/edit', 'EditController')->name('personal.comment.edit');
		Route::put('{id}', 'UpdateController')->name('personal.comment.update');
		Route::delete('{id}', 'DeleteController')->name('personal.comment.delete');
	});

});


Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified']], function() {

	Route::group(['namespace' => 'Main'], function() {

		Route::get('', 'IndexController')->name('admin.index');
	});

	Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function(){
		Route::get('', 'IndexController')->name('admin.category.index');
		Route::get('create', 'CreateController')->name('admin.category.create');
		Route::post('', 'StoreController')->name('admin.category.store');
		Route::get('{id}', 'ShowController')->name('admin.category.show');
		Route::get('{category}/edit', 'EditController')->name('admin.category.edit');
		Route::put('{id}', 'UpdateController')->name('admin.category.update');
		Route::delete('{id}', 'DeleteController')->name('admin.category.delete');
	});

	Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function(){
		Route::get('', 'IndexController')->name('admin.tag.index');
		Route::get('create', 'CreateController')->name('admin.tag.create');
		Route::post('', 'StoreController')->name('admin.tag.store');
		Route::get('{id}', 'ShowController')->name('admin.tag.show');
		Route::get('{tag}/edit', 'EditController')->name('admin.tag.edit');
		Route::put('{id}', 'UpdateController')->name('admin.tag.update');
		Route::delete('{id}', 'DeleteController')->name('admin.tag.delete');
	});

	Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function(){
		Route::get('', 'IndexController')->name('admin.post.index');
		Route::get('create', 'CreateController')->name('admin.post.create');
		Route::post('', 'StoreController')->name('admin.post.store');
		Route::get('{id}', 'ShowController')->name('admin.post.show');
		Route::get('{post}/edit', 'EditController')->name('admin.post.edit');
		Route::put('{id}', 'UpdateController')->name('admin.post.update');
		Route::delete('{id}', 'DeleteController')->name('admin.post.delete');
	});

	Route::group(['namespace' => 'User', 'prefix' => 'users'], function(){
		Route::get('', 'IndexController')->name('admin.user.index');
		Route::get('create', 'CreateController')->name('admin.user.create');
		Route::post('', 'StoreController')->name('admin.user.store');
		Route::get('{id}', 'ShowController')->name('admin.user.show');
		Route::get('{user}/edit', 'EditController')->name('admin.user.edit');
		Route::put('{id}', 'UpdateController')->name('admin.user.update');
		Route::delete('{id}', 'DeleteController')->name('admin.user.delete');
	});
});




Auth::routes(['verify' => true]);


