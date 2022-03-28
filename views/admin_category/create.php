<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<section>
    <div class="container">
        <div class="row">
            <br />
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin panel</a></li>
                    <li><a href="/admin/category">Category management</a></li>
                    <li class="active">Add category</li>
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
                    <h2 class="text-center reg">Add new category</h2>
                    <form action="#" method="post">
                        <p class=col>Category name: </p>
                        <input type="text" name="category" placeholder="" value="" />
                        <input type="submit" name="submit" class="btn btn-default sub" value="Save">

                    </form>
                </div>
            </div>
        </div>
    </div>
</section><br />

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>