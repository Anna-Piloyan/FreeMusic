<?php
include(ROOT . '/views/layouts/header.php');
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h2>Categories</h2>
                <div class="panel-group category-products">
                    <?php foreach ($categories as $item) : ?>
                        <div class="panel-default">
                            <div class="panel-heading ">
                                <h4 class="panel-title"> <a href="/category/<?= $item['id'] ?>" class="<?php if ($categoryId == $item['id']) {
                                                                                                            $n = $item['category'];
                                                                                                            echo 'active';
                                                                                                        } ?>">
                                        <?= $item['category'] ?>
                                    </a></h4>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items">

                    <h2 class="title text-center"><?= $n ?></h2>
                    <?php foreach ($categoryProducts as $item) : ?>
                        <div class="col-sm-12">
                            <div class="product-image-wrapper">
                                <div class="float-start col-sm-2 dist-right">
                                    <img src="/template/images/<?= $item['image'] ?>" alt="" width=100 height=100 class="imgSt" />
                                </div>
                                <div class="productinfo row d-flexcol-sm-9">
                                    <h3><a class="t" href="/track/<?= $item['id'] ?>"><?= $item['name'] ?></a><span class="dist"><?= $item['performer'] ?></span></h3>
                                    <audio id="player" controls>
                                        <source src="/template/music/<?= $item['track'] ?>">
                                    </audio>
                                    <a href="#" data-id="<?= $item['id'] ?>" class="btn add-to-cart playlist"><i class="fa fa-plus"></i> Playlist</a>
                                </div>

                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <?= $pagination->get() ?>
            </div>
        </div>
    </div>
</section><br />

<?php
include(ROOT . '/views/layouts/footer.php');
?>