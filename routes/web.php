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
 
Route::get('/', function () { 
    return view('welcome'); 
}); 
 
Auth::routes(); 
 
Route::get('/home', 'HomeController@index')->name('home'); 
 
Auth::routes(); 
 
Route::get('/home', 'HomeController@index')->name('home'); 
 

Route::group(['middleware' => ['auth', 'checkUser:admin']], function(){
    Route::resource('/car', 'CarController'); 
    Route::resource('/booking', 'BookingController'); 
});

Route::group(['middleware' => ['auth', 'checkUser:renter']], function(){
    Route::resource('/product', 'ProductController');
});