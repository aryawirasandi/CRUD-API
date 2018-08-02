<?php


// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });


// $router->get('/key',function (){
// 	return str_random(32);
// });



$router->group(['prefix' => 'api/v1'], function() use($router){
	$router->get('/products', 'ProductController@index');
	$router->post('/product', 'ProductController@create');
	$router->get('product/{id}', 'ProductController@show');
	$router->put('product/{id}', 'ProductController@update');
	$router->delete('product/{id}', 'ProductController@destroy');
});

