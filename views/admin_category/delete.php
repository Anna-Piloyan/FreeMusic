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
            <h4 class="title-cab">Delete category #<?php echo $id; ?></h4>
            <p class="col">Are you sure you want to delete this category?</p>
            <form method="post">
                <input type="submit" name="submit" class="sub back-adm" value="Delete" />
            </form>
        </div>
    </div>
</section><br />

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>