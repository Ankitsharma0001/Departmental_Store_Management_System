<?php

use Illuminate\Support\Facades\Route;




Route::get('/home', 'ProductController@index')->name('home');

Route::get('/manage', 'ProductController@manage')->name('manage');
Route::get('/create', 'ProductController@create')->name('create');
Route::post('/create', 'ProductController@store')->name('store');
Route::get('/edit/{id}', 'ProductController@edit')->name('edit');
Route::post('/update/{id}', 'ProductController@update')->name('update');
Route::delete('/delete/{id}', 'ProductController@delete')->name('delete');


Route::get('/add_customers', 'ProductController@add_customers')->name('add_customers');
Route::post('/add', 'ProductController@add')->name('add');
Route::get('/manage_customers', 'ProductController@manage_customers')->name('manage_customers');

Route::get('/edit_customers/{id}', 'ProductController@edit_customers')->name('edit_customers');
Route::post('/update_customers/{id}', 'ProductController@update_customers')->name('update_customers');
Route::delete('/delete_customers/{id}', 'ProductController@delete_customers')->name('delete_customers');

//    **************************    suraj     *************************


//Route::view('/','welcome')->name('/');
//Route::view('/at','about')->name('about');
//Route::view('/hello','soup.hello')->name('hnji');

//Auth::routes();
Route::get('/shop',function(){
    return view('shop');
});
Route::post('/shop',function()
{
    return view('shop');
});
Route::get('/cart/{id}','yescontroller@show');

Route::get('/checkout',function()
{
  return view('checkout');
});
Route::post('/checkout',function()
{
    return view('checkout');
});
//Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/home', 'HomeController@change');


//************************************************* */

Route::get('/', 'AuthController@index');
  Route::post('/post-login', 'AuthController@postLogin'); 
  Route::get('/registration', 'AuthController@registration');
  Route::post('/post-registration', 'AuthController@postRegistration'); 
  Route::get('/dashboard', 'AuthController@dashboard'); 
  
  Route::get('/logout', 'AuthController@logout');