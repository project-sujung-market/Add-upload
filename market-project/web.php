<?php

use Art\Core\Route;

Route::GET("/", "MainController@index");
Route::GET("/join", "JoinController@joinPage");
Route::POST("/join", "JoinController@joinProcess");
Route::POST("/login", "JoinController@loginProcess");

if( user() ){
    Route::GET("/logout", "JoinController@logoutProcess");
    Route::GET("/upload", "UploadController@uploadPage");
    Route::POST("/upload", "UploadController@uploadProcess");
    Route::GET("/mypage", "MypageController@myPage");
}