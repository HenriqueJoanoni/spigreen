<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
//$router->get('/', 'HomeController@listAll');

/** Clients */
$router->get('/clients-insert','ClientsController@insertClient');
$router->post('/clients-insert','ClientsController@insertClientAction');

$router->get('/client-update/client_id={id}','ClientsController@updateClient');
$router->post('/client-update/{id}','ClientsController@updateClientAction');

$router->get('/client-delete/{id}', 'ClientsController@deleteAction');


/** Products */
$router->get('/products-insert','ProductsController@insert');
$router->post('/products-insert','ProductsController@insertProductAction');

$router->get('/products-update/product_id={id}', 'ProductsController@updateProduct');
$router->post('/products-update/{id}', 'ProductsController@updateProductAction');

$router->get('/products-delete/{id}','ProductsController@deleteAction');