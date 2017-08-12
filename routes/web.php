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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tag', function () {
    return view('tag');
})->name('tag');

Route::get('tag/{slug}', function ($slug) {
    return view('tag_show');
})->where(['slug' => '[a-z]+'])->name('tag.slug');

Route::get('tag/{slug}/{section}', function ($slug, $section) {
    return view('tag_section');
})->where(['slug' => '[a-z]+', 'section' => '[a-z]+[0-9]'])->name('tag.section');

Route::get('/articles', 'ArticleController@index')->name('article.index');
Route::get('/read/{id}', 'ArticleController@show')->name('article.show');
