<?php

class PlaylistController
{
    public function actionIndex()
    {
        $categories = Category::getCategoriesList();
        $productsInCart = Playlist::getProducts();
        if ($productsInCart) {
            $productIds = array_keys($productsInCart);
            $products = Track::getTracksByIds($productIds);
        }
        require_once(ROOT . '/views/playlist/index.php');
        return true;
    }

    public function actionAdd($id)
    {
        Playlist::addProduct($id);
        $refferer = $_SERVER['HTTP_REFERER'];
        header("location: $refferer");
    }

    public function actionAddAjax($id)
    {
        echo Playlist::addProduct($id);
        return true;
    }
    public function actionDelete($id)
    {
        Playlist::deleteProduct($id);
        header("location: /playlist");
    }
}
