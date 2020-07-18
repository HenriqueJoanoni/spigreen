<?php
namespace src\handlers;

use \src\models\Products;

class ProductsHandler{

    public static function insertProducts($productName, $price, $description, $qt)
    {
        Products::insert([
            'product_name' => $productName,
            'price' => $price,
            'description' => $description,
            'quantity' => $qt
        ])->execute();

        return true;
    }

    public static function listProducts($productId = '')
    {
        if(!empty($productId)){
            $product = Products::select()->where('id_product',$productId)->get();
        }else{
            $product = Products::select()->execute();
        }

        if($product) {
            return $product;
        }else{
            return false;
        }
    }

    public static function updateProduct($productInfo, $productId)
    {
        Products::update()
            ->set([
                'product_name' => $productInfo['product_name'],
                'price' => $productInfo['price'],
                'description' => $productInfo['description'],
                'quantity' => $productInfo['quantity']
            ])
            ->where('id_product', $productId)
            ->execute();

        return true;
    }

    public static function deleteProduct($productId)
    {
        Products::delete()->where('id_product',$productId)->execute();
        return true;
    }

}

