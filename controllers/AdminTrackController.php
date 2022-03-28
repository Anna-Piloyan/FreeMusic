<?php
class AdminTrackController extends AdminBase
{

    public function actionIndex()
    {
        self::checkAdmin();
        $productsList = Track::getTracksList();
        require_once(ROOT . '/views/admin_track/index.php');
        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdmin();
        if (isset($_POST['submit'])) {
            Track::deleteTrackById($id);
            header("location: /admin/product");
        }
        require_once(ROOT . '/views/admin_track/delete.php');
        return true;
    }

    public function actionCreate()
    {
        self::checkAdmin();
        $categoriesList = Category::getCategoriesListAdmin();
        $image = "";
        $track = "";
        if (isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['category_id'] = $_POST['category_id'];
            if (isset($_FILES['image']['name']))
                $options['image'] = $_FILES['image']['name'];
            else
                $options['image'] = $image;
            if (isset($_FILES['track']['name']))
                $options['track'] = $_FILES['track']['name'];
            else
                $options['track'] = $track;
            $options['performer'] = $_POST['performer'];
            $errors = false;
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = "Fill all fields";
            }
            if ($errors == false) {
                $id = Track::createTrack($options);
                if ($id) {
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        move_uploaded_file($_FILES["image"]["tmp_name"], ROOT . "/template/images/{$options['image']}");
                    }
                    if (is_uploaded_file($_FILES["track"]["tmp_name"])) {
                        move_uploaded_file($_FILES["track"]["tmp_name"], ROOT . "/template/music/{$options['track']}");
                    }
                }

                header("location: /admin/track");
            }
        }
        require_once(ROOT . '/views/admin_track/create.php');
        return true;
    }

    public function actionUpdate($id)
    {
        self::checkAdmin();
        $categoriesList = Category::getCategoriesListAdmin();
        $product = Track::getTrackById($id);
        $image = Track::getImage($id);
        $track = Track::getTrack($id);

        if (isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['category_id'] = $_POST['category_id'];

            if (isset($_FILES['image']['name']))
                $options['image'] = $_FILES['image']['name'];
            else
                $options['image'] = $image;
            if (isset($_FILES['track']['name']))
                $options['track'] = $_FILES['track']['name'];
            else
                $options['track'] = $track;

            $options['performer'] = $_POST['performer'];

            if (Track::updateTrackById($id, $options)) {
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    move_uploaded_file($_FILES["image"]["tmp_name"], ROOT . "/template/images/{$options['image']}");
                }
                if (is_uploaded_file($_FILES["track"]["tmp_name"])) {
                    move_uploaded_file($_FILES["track"]["tmp_name"], ROOT . "/template/music/{$options['track']}");
                }
            }
            header("location: /admin/track");
        }
        require_once(ROOT . '/views/admin_track/update.php');
        return true;
    }
}
