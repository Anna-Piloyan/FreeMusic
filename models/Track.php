<?php
include(ROOT . "/config/config.php");
class Track
{

    public static function getTrackList($count = SHOW_BY_DEFAULT)  
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM track 
        ORDER BY id DESC
        LIMIT $count");
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

   
    public static function getTrackListByCategory($categoryId, $page = 1)
    {
        $offset = ($page - 1) * SHOW_FOR_PAGINATION;      
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM track 
        WHERE category_id = $categoryId
        ORDER BY id DESC "
            . "LIMIT " . SHOW_FOR_PAGINATION      
            . " OFFSET " . $offset);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
    public static function getTrackById($id)
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM track 
        WHERE id = $id");

        $data = $result->fetch(PDO::FETCH_ASSOC);

        return $data;
    }

    public static function getTotalTracksInCategory($categoryId)
    {

        $db = Db::getConnection();
        $result = $db->query("SELECT count(id) AS count FROM track "
            . "WHERE category_id = $categoryId");

        $data = $result->fetch(PDO::FETCH_ASSOC);

        return $data["count"];
    }

    public static function getTracksByIds($idsArray)
    {
        $db = Db::getConnection();
        $idsString = implode(',', $idsArray);
        $query = "SELECT * FROM track WHERE id IN($idsString)";

        $result = $db->query($query);

        $data = $result->fetchAll();

        return $data;
    }

    public static function getTracksList() 
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM track ORDER BY id ASC");

        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public static function deleteTrackById($id)
    {
        $db = Db::getConnection();
        $sql = "DELETE FROM track WHERE id = $id";
        $result = $db->query($sql);
       
        return $result->execute();
    }

    public static function createTrack($options)
    {
        $db = Db::getConnection();
        $sql = "INSERT INTO track
        (name, category_id, image, performer, track) 
        VALUES(:name, :category_id, :image, :performer, :track)";
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':image', $options['image'], PDO::PARAM_STR);
        $result->bindParam(':performer', $options['performer'], PDO::PARAM_STR);
        $result->bindParam(':track', $options['track'], PDO::PARAM_STR);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        return 0;
    }
    public static function updateTrackById($id, $options)
    {
        $db = Db::getConnection();
        $sql = "UPDATE track SET
            name = :name,
            category_id = :category_id,
            image = :image,
            performer = :performer,     
            track = :track 
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':image', $options['image'], PDO::PARAM_STR);
        $result->bindParam(':performer', $options['performer'], PDO::PARAM_STR);
        $result->bindParam(':track', $options['track'], PDO::PARAM_STR);
        return $result->execute();
       
    }

    public static function getImage($id){
        $db = Db::getConnection();
        $result = $db->query("SELECT image FROM track WHERE id = $id");
        $data = $result->fetch();
        return $data['image'];
    }
    public static function getTrack($id){
        $db = Db::getConnection();
        $result = $db->query("SELECT track FROM track WHERE id = $id");
        $data = $result->fetch();
        return $data['track'];
    }
}
