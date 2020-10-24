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
    'as' => 'login', 'uses' => 'UserController@getLogin'
]);

$router->post('validate', [
    'as' => 'validate', 'uses' => 'UserController@postValidate'
]);

$router->get('dashboard', [
    'as' => 'dashboard', 'uses' => 'UserController@getDashboard'
]);

$router->post('create-user', [
    'as' => 'create-user', 'uses' => 'UserController@postCreateUser'
]);

$router->post('create', [
    'as' => 'create', 'uses' => 'UserController@postCreate'
]);

$router->post('edit', [
    'as' => 'edit', 'uses' => 'UserController@postEdit'
]);

$router->post('update', [
    'as' => 'update', 'uses' => 'UserController@postUpdate'
]);

$router->post('delete', [
    'as' => 'delete', 'uses' => 'UserController@postDelete'
]);
