<?php

class SiteController
{
  function actionIndex()
  {
    $categories = Category::getCategoriesList();
    $tracks = Track::gettrackList();
    require_once(ROOT . '/views/site/index.php');
    return true;
  }
}
