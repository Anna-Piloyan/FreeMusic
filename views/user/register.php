<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <?php if ($result) : ?>
                    <p class="green">You are register!</p>
                <?php else : ?>
                    <?php if (isset($errors) && is_array($errors)) : ?>
                        <ul class="error-info">
                            <?php foreach ($errors as $error) : ?>
                                <li class="red"><?= $error ?></li>
                            <?php endforeach ?>
                        </ul>
                    <?php endif ?>
                    <div class="signup-form">
                        <h2 class="text-center reg"> Registration </h2>
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Имя" value=<?= $name ?>>
                            <input type="email" name="email" placeholder="E-mail" value=<?= $email ?>>
                            <input type="password" name="password" placeholder="Пароль" />
                            <input type="submit" name="submit" class="btn btn-default sub" value="Submit" />
                        </form>
                    </div>
                <?php endif ?>
                <br />
                <br />
            </div>
        </div>
    </div>
</section><br />

<?php include ROOT . '/views/layouts/footer.php'; ?>