<?php

$router->get('', 'PagesController@home');
$router->get('registration', 'UsersController@index');
$router->post('registration/addUser', 'UsersController@addUser');
$router->post('registration/check', 'UsersController@check');
$router->post('registration/checkSubmit', 'UsersController@checkSubmit');