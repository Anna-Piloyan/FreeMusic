<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br />
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin panel</a></li>
                    <li><a href="/admin/track">Tracks management</a></li>
                    <li class="active">Add track</li>
                </ol>
            </div>
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <?php if (isset($errors) && is_array($errors)) : ?>
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <div class="signup-form">
                    <h2 class="text-center reg">Add new track</h2>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <p class="col">Track name:</p>
                        <input type="text" name="name" placeholder="" value="">
                        <p class="col">Category:</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)) : ?>
                                <?php foreach ($categoriesList as $category) : ?>
                                    <option value="<?php echo $category['id']; ?>">
                                        <?php echo $category['category']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        <br />
                        <p class="col">Performer</p>
                        <input type="text" name="performer" placeholder="" value="">
                        <p class="col">Image</p>
                        <input type="file" name="image" placeholder="" value="">
                        <p class="col">Track</p>
                        <input type="file" name="track" placeholder="" value="">
                        <input type="submit" name="submit" class="btn btn-default sub" value="Save">
                        <br />
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><br />

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>