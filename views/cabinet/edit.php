<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <?php if ($result) : ?>
                    <p class="green">Data was changes successfully!</p>
                <?php else : ?>
                    <?php if (isset($errors) && is_array($errors)) : ?>
                        <ul>
                            <?php foreach ($errors as $error) : ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <div class="signup-form">
                        <h2 class="text-center reg">Edit data</h2>
                        <form action="#" method="post">
                            <p class=col>Name:</p>
                            <input type="text" name="name" placeholder="Name" value="<?php echo $user['name']; ?>" />
                            <p class=col>Password:</p>
                            <input type="password" name="password" placeholder="Password" value="<?php echo $user['password']; ?>" />
                            <br />
                            <input type="submit" name="submit" class="btn btn-default sub" value="Save" />
                        </form>
                    </div>
                <?php endif; ?>
                <br />
                <br />
            </div>
        </div>
    </div>
</section><br />

<?php include ROOT . '/views/layouts/footer.php'; ?>