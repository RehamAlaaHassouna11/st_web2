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

Route::get('/test2', function () {
    echo 'welcome to laravel';
    $name ='Reham Alaa Hassouna';
    $id='220171228';
    dd('My Name is: ',$name,'ID: ',$id);

});

Route::get('/test', function () {

//    $Posts=\App\post::all();
//    dd($Posts);
    echo 'welcome to laravel';


});




Route ::redirect('google','https://www.google.ps',301);

Route::prefix('admin')->group(function(){

    Route::get('admin/products',function(){

    });

    Route::get('admin/dashboard',function(){

    });

    Route::get('admin/categoreis',function(){

    });

    Route::prefix('users')->group(function(){
        Route::get('profile',function(){

        });

        Route::get('reset_passward',function(){

        });
    });

});


Route::middleware(['checkip','auth'])->group(function(){
    Route::get('dashboard',function(){


    });
});

Route::middleware(['throttle:3,1'])->group(function(){
    Route::get('admin',function(){


    });
});

