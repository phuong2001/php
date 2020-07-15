<?php
use App\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::resource('product', 'ProductController');

Route::post('them_du_lieu',[
    'as' => 'them_du_lieu',
    'uses' => 'login@postthem_du_lieu'
]);

Route::delete('/delete_img/{delete_img}',[
    'as' => 'delete-img',
    'uses' => 'login@delete_du_lieu_img'
]);

Route::get('edit/{id}', [
    'as' => 'edit',
    'uses' => 'login@update_edit'
]);

Route::PATCH('update/{id}', 'login@sua_du_lieu');