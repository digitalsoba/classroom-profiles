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



/*
Route::get('/equip', function () {
    return "This is equip";
});
Route::get("/classRoomNumber/{roomNum}",function($roomNum){
    return $roomNum;
});
Route::get('/equip', function () {
    return view('pages.equip');
});

*/
Route::get('/', function () {
    return view('welcome');
});

Route::resource("equip","EquipmentsController");