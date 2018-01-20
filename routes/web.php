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

/*
Route::resource('menuitems','MenuItemController') ;
*/
Auth::routes();

//Route::get('/home', 'HomeController@index');


Route::resource('user', 'modelsControllers\UserController');
Route::resource('restaurant', 'modelsControllers\RestaurantController');
Route::resource('category', 'modelsControllers\CategoryController');
Route::resource('meal', 'modelsControllers\MealController');
Route::resource('device', 'modelsControllers\DeviceController');
Route::resource('employee', 'modelsControllers\EmployeeController');
Route::resource('instance_device', 'modelsControllers\Instance_DeviceController');
Route::resource('order', 'modelsControllers\OrderController');
Route::resource('promotion', 'modelsControllers\PromotionController');
Route::resource('history', 'modelsControllers\HistoryController');
Route::resource('commande', 'modelsControllers\CommandeController');