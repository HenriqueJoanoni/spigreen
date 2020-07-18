<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\ClientsHandler;
use src\handlers\ProductsHandler;

class HomeController extends Controller {

    public function index() {
        $products = ProductsHandler::listProducts();
        $clients = ClientsHandler::listClients();

        $this->render('home',[
            'products' => $products,
            'clients' => $clients
        ]);
    }
}