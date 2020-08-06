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

/*Route::get('/index', function () {
    return view('index');
});


Route::get('/about',function()
{ 
return view('about'); 
});
*/

Route::get('/welcome','AuthController@datang');
Route::get('/register','AuthController@reg' );
Route::get('/home','HomeController@home');
Route::get('/admin','AuthController@admin');
/*Route::get('/welcome',function()
{

    return view('welcome');
}); 


Route::get('/main',function()
{  $jeneng = 'Sanbercode'; 

    return view('main',['jeneng'=>$jeneng]);
}); */

Route::get('/', function()
{
    return view('tables'); 
}); 

Route::get('/data-tables',function()
{

    return view('datatables');
}


); 


