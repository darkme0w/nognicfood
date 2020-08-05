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

//Route fontend
Route::get('/','HomepageController@showHomepage')->name('homepage');

Route::get('/productlisting','HomepageController@showProductlisting')->name('productlisting');

Route::get('/productdetails','HomepageController@showProductdetails')->name('productdetails');

Route::get('/aboutus','HomepageController@showAboutus')->name('aboutus');

Route::get('/contactus','HomepageController@showContactus')->name('contactus');

Route::get('/blog','HomepageController@showBlog')->name('blog');

Route::get('/blogdetails','HomepageController@showBlogdetails')->name('blogdetails');

Route::get('/faq','HomepageController@showFAQ')->name('faq');

Route::get('/errorpage','HomepageController@showErrorpage')->name('errorpage');
