<?php
include(ROOT . '/views/layouts/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <h2>Categories</h2>
            <div class="panel-group category-products">
                <?php foreach ($categories as $item) : ?>
                    <div class="panel-default">
                        <div class="panel-heading ">
                            <h4 class="panel-title"><a href="/category/<?= $item['id'] ?>"><?= $item['category'] ?></a></h4>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="col-sm-9 padding-right">
            <div class="product-details">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="/template/images/<?= $track['image'] ?>" alt="image" />
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <h3><a class="t" href="/track/<?= $track['id'] ?>"><?= $track['name'] ?></a></h3>
                        <p class="col"><?= $track['performer'] ?></p>
                        <audio id="player" controls>
                            <source src="/template/music/<?= $track['track'] ?>">
                        </audio>
                        <a href="#" data-id="<?= $track['id'] ?>" class="btn add-to-cart playlist"><i class="fa fa-plus"></i> Playlist</a>
                    </div>
                    <div class="row move">
                        <div class="col-sm-11">
                            <h3>Content about song</h3>
                            <p class="col">Adele Laurie Blue Adkins was born in 1988 and raised in London by
                                a single mother. In her early teens, Adele began to consider a
                                music career. While she attended a secondary school for the performing
                                arts, a friend posted her songs on Myspace. In 2006, shortly after graduating,
                                Adele signed a recording contract.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<?php
include(ROOT . '/views/layouts/footer.php');
?>