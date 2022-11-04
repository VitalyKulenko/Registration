<?php

$router->get('', 'PagesController@home');

$router->get('registration', 'UsersController@index');
$router->post('registration', 'UsersController@store');