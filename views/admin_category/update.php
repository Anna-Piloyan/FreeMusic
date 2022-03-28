<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br />
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin panel</a></li>
                    <li><a href="/admin/category">Category management</a></li>
                    <li class="active">Update category</li>
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
                    <h2 class="text-center reg">Update category "<?php echo $category['category']; ?>"</h2>
                    <form action="#" method="post">
                        <p class=col>Category: </p>
                        <input type="text" name="category" placeholder="" value="<?php echo $category['category']; ?>">

                        <input type="submit" name="submit" class="btn sub" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><br />

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>