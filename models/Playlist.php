<?php

class Playlist
{

    public static function addProduct($id)
    {
        $productsInCart = array();
        if (isset($_SESSION['products'])) {
            $productsInCart = $_SESSION['products'];
        }
        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            $productsInCart[$id] = 1;
        }
        $_SESSION['products'] = $productsInCart;
        return self::countItems();
    }

    public static function countItems()
    {
        if (isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count += $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }

    public static function getProducts(){
        if(isset($_SESSION['products'])){
            return $_SESSION['products'];
        }
        return false;
    }

   
    public static function clear(){
        if(isset($_SESSION['products'])){
            unset($_SESSION['products']);
        }
    }

    public static function deleteProduct($id){
        $productsInCart = self::getProducts();
        unset($productsInCart[$id]);
        $_SESSION['products'] = $productsInCart;

    }
}
