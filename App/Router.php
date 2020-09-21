<?php

use \NoahBuscher\Macaw\Macaw as Route;


Route::get('/', 'App\Home\Controller\HomeController@main');


Route::get('/login', 'App\Home\Member\LoginController@index');
Route::get('/login2', 'App\Home\Member\LoginController@login');

Route::get('/about', function() {
    echo 'about!';
});
  

Route::error(function() {
    echo '404 !';
});

Route::dispatch();



