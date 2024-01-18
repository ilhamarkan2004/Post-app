<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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


$router->get('/', function () use ($router) {
	return $router->app->version();
});
$router->group(['prefix' => 'posts'], function () use ($router) {
	$router->post('/', ['uses' => 'PostController@createPost']);
	$router->get('/{id}', ['uses' => 'PostController@getPostById']);
	$router->put('/{id}/tag/{tagId}', ['uses' => 'PostController@addTag']);
});
$router->group(['prefix' => 'comments'], function () use ($router) {
	$router->post('/', ['uses' => 'CommentController@createComment']);
});
$router->group(['prefix' => 'tags'], function () use ($router) {
	$router->post('/', ['uses' => 'TagController@createTag']);
});

