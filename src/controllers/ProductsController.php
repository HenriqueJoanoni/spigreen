<?php


namespace src\controllers;


use core\Controller;
use src\handlers\ProductsHandler;

class ProductsController extends Controller
{
    public function insert()
    {
        $this->render('cadastra_produtos');
    }

    public function insertProductAction()
    {
        $productName = filter_input(INPUT_POST, 'product_name');
        $priceInput = filter_input(INPUT_POST, 'product_price');
        $description = filter_input(INPUT_POST, 'product_description');
        $qtd = filter_input(INPUT_POST, 'product_quantity');

        $price = str_replace(',','.', $priceInput);

        $inserted = ProductsHandler::insertProducts($productName, $price, $description, $qtd);

        if ($inserted) {
            $this->redirect('/');
        } else {

            $flash = '';
            if (!empty($_SESSION['flash'])) {
                $flash = $_SESSION['flash'];
                $_SESSION['flash'] = '';
            }

            $this->render('cadastra_produtos', ['flash' => $flash]);
        }
    }

    public function selectAllProducts()
    {
        $productsList = ProductsHandler::listProducts();

        if ($productsList) {
            $this->redirect('/');
        } else {
            $flash = '';
            if (!empty($_SESSION['flash'])) {
                $flash = $_SESSION['flash'];
                $_SESSION['flash'] = '';
            }

            $this->render('cadastra_produtos', ['flash' => $flash]);
        }
    }

    public function updateProduct($idProduct)
    {
        $product = ProductsHandler::listProducts($idProduct['id']);
        $arProduct = [
            'id_product' => $product[0]['id_product'],
            'product_name' => $product[0]['product_name'],
            'product_price' => str_replace('.',',',$product[0]['price']),
            'product_description' => $product[0]['description'],
            'product_quantity' => $product[0]['quantity']
        ];

        if($product){
            $this->render('atualiza_produtos',[
                'products' => $arProduct
            ]);
        }else{
            return false;
        }
    }

    public function updateProductAction($idProduct)
    {
        $id = explode('/',$_GET['request']);
        $productNameInput = filter_input(INPUT_POST, 'product_name');
        $priceInput = filter_input(INPUT_POST,'product_price');
        $descriptionInput = filter_input(INPUT_POST,'product_description');
        $quantityInput = filter_input(INPUT_POST,'product_quantity');

        $infoProduct = [
            'product_name' => $productNameInput,
            'price' => str_replace(',','.',$priceInput),
            'description' => $descriptionInput,
            'quantity' => $quantityInput
        ];

        $updated = ProductsHandler::updateProduct($infoProduct, $id[1]);

        if ($updated) {
            $this->redirect('/');
        } else {
            return false;
        }
    }

    public function deleteAction($productId)
    {
        ProductsHandler::deleteProduct($productId);
        $this->redirect('/');
    }
}