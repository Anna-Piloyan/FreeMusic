<?php
class TrackController
{
    function actionView($id)
    {
        $categories = Category::getCategoriesList();
        $track = Track::getTrackById($id);
        require_once(ROOT . '/views/track/view.php');
        return true;
  
    }
}
