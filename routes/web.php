<?php

Route::get('login/github', 'GitAuthController@redirectToProvider');
Route::get('login/github/callback', 'GitAuthController@handleProviderCallback');
Route::get('/', function () {
    return 'home';
});