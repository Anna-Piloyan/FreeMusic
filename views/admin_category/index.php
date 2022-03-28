<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br />
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin panel</a></li>
                    <li class="active">Category management</li>
                </ol>
            </div>
            <a href="/admin/category/create" class="btn back-adm"><i class="fa fa-plus"></i> Add category</a>
            <h4 class="title-cab">Category list</h4>
            <br />
            <table class="table-bordered table tb-style">
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php foreach ($categoriesList as $category) : ?>
                    <tr>
                        <td><?php echo $category['id']; ?></td>
                        <td><?php echo $category['category']; ?></td>
                        <td><a href="/admin/category/update/<?php echo $category['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/category/delete/<?php echo $category['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</section><br />

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>