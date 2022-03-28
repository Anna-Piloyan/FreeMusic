<?php

class CatalogController
{
    public function actionIndex()
    {
        $categories = Category::getCategoriesList();
        $tracks = Track::getTrackList(CATALOG_ITEMS_AMOUNT);
        require_once(ROOT . '/views/catalog/index.php');
        return true;
    }

    public function actionCategory($categoryId, $page = 1)
    {
        $categories = Category::getCategoriesList();
        $categoryProducts = Track::getTrackListByCategory($categoryId, $page);
        $total = Track::getTotalTracksInCategory($categoryId);
        $pagination = new Pagination($total, $page, SHOW_FOR_PAGINATION, PAGE_INDEX);

        require_once(ROOT . '/views/catalog/category.php');
        return true;
    }
}
