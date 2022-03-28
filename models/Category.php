<?php

class Category
{

    public static function getCategoriesList()
    {

        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM category");
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public static function getCategoriesListAdmin()
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM category");
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }


    public static function deleteCategoryById($id)
    {
        $db = Db::getConnection();
        $sql = "DELETE FROM category WHERE id = $id";
        $result = $db->query($sql);
        return $result->execute();
    }

    public static function createCategory($category)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO category '
            . '(category)'
            . ' VALUES'
            . '(:category)';

        $result = $db->prepare($sql);
        $result->bindParam(':category', $category, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function getCategoryById($id)
    {
        $db = Db::getConnection();
        $sql = "SELECT * FROM category WHERE id = $id";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public static function updateCategoryById($id, $category)
    {
        $db = Db::getConnection();
        $sql = "UPDATE category SET
            category = :category  
            WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':category', $category, PDO::PARAM_STR);

        return $result->execute();
    }
}
