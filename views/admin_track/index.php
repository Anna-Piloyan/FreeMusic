<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br />
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin panel</a></li>
                    <li class="active">Tracks management</li>
                </ol>
            </div>
            <a href="/admin/track/create" class="btn back-adm move"><i class="fa fa-plus"></i> Add track</a>
            <h4 class="title-cab move">All tracks</h4>
            <br />
            <?php foreach ($productsList as $item) : ?>
                <div class="col-sm-10">
                    <div class="product-image-wrapper">
                        <div class="float-start col-sm-2 dist-right">
                            <img src="/template/images/<?= $item['image'] ?>" alt="" width=100 height=100 class="imgSt" />
                        </div>
                        <div class="productinfo row d-flexcol-sm-9">
                            <h3><a class="t" href="/track/<?= $item['id'] ?>"><?= $item['name'] ?></a><span class="dist"><?= $item['performer'] ?></span></h3>
                            <audio id="player" controls>
                                <source src="/template/music/<?= $item['track'] ?>">
                            </audio>
                            <a class="btn del_st" href="/admin/track/update/<?php echo $item['id']; ?>"><i class="fa fa-pencil-square-o"></i></a>
                            <a class="btn del_st" href="/admin/track/delete/<?php echo $item['id']; ?>"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section><br />

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>