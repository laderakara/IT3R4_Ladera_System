<?php



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/



$router->get('users', [
    'as' => 'users', 'uses' => 'UserController@getUsers'
]);

$router->get('login', [
    'as' => 'login', 'uses' => 'UserController@loginPage'
]);

$router->post('validate', [
    'as' => 'validate', 'uses' => 'UserController@validateUser'
]);

$router->get('dashboard', [
    'as' => 'dashboard', 'uses' => 'UserController@dashboard'
]);

$router->post('create', [
    'as' => 'create', 'uses' => 'UserController@createPage'
]);

$router->post('create-user', [
    'as' => 'create-user', 'uses' => 'UserController@createUser'
]);

$router->post('edit', [
    'as' => 'edit', 'uses' => 'UserController@editPage'
]);

$router->post('update', [
    'as' => 'update', 'uses' => 'UserController@update'
]);

$router->post('delete', [
    'as' => 'delete', 'uses' => 'UserController@delete'
]);
