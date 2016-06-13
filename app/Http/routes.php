<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','RestrController@indexAction', function(){});
Route::get('adminpg', function () {
    return view('Restr.adminpg');
});
Route::any(
    "Restr", // ชื่อที่กรอกใน URL
    [
        "as" => "Restr/index", // ชื่อ Controller และ Action ที่ต้องการวิ่งเข้าไปหา
        "uses" => "RestrController@indexAction" // ชื่อ Controller และ Action ที่ต้องการวิ่งเข้าไปหา
    ]
);

Route::any(
"showrestr", // ชื่อที่กรอกใน URL
[
    "uses" => "RestrController@showrestrAction" // ชื่อ Controller และ Action ที่ต้องการวิ่งเข้าไปหา
]
);
Route::get('check-connect',function(){
 if(DB::connection()->getDatabaseName())
 {
 return "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
 }else{
 return 'Connection False !!';
 }
 });
Route::get('orders={id}','RestrController@ordersAction', function(){});
Route::post('saveor', 'RestrController@saveorder');
Route::get('adminpg', 'RestrController@addd3');
Route::get('manag={id}','RestrController@compleAction', function(){});
Route::get('maps={id}','RestrController@mapsAction', function(){});



Route::auth();
