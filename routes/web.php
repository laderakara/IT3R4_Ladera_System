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

$router->get('adminn', [
    'as' => 'adminn', 'uses' => 'UserController@getAdminn'
]);

$router->get('accountant', [
    'as' => 'accountant', 'uses' => 'UserController@getAccountant'
]);

$router->get('secretary', [
    'as' => 'secretary', 'uses' => 'UserController@getSecretary'
]);

$router->get('cashier', [
    'as' => 'cashier', 'uses' => 'UserController@getCashier'
]); 

$router->get('student', [
    'as' => 'student', 'uses' => 'UserController@getStudent'
]);



