<?php


Route::get('/msg/index','MsgsController@index');
Route::get('/msg/add','MsgsController@add');
Route::post('/msg/add','MsgsController@addPost');
Route::get('/msg/del/{id}','MsgsController@del')->where('id','\d+');
Route::match(['get','post'],'msg/edit/{id}','MsgsController@edit')->where('id','\d+');