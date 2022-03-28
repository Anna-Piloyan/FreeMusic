<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <?php if (isset($errors) && is_array($errors)) : ?>
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li class="red"><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <div class="signup-form">
                    <h2 class="text-center reg">Login</h2>
                    <form action="#" method="post">
                        <input type="email" name="email" placeholder="E-mail" />
                        <input type="password" name="password" placeholder="Пароль" />
                        <input type="submit" name="submit" class="btn btn-default sub" value="Login" />
                    </form>
                </div>
                <br />
                <br />
            </div>
        </div>
    </div>
</section><br />

<?php include ROOT . '/views/layouts/footer.php'; ?>