<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <h1 class="title-cab">User Account</h1>
            <?php if (isset($errors) && is_array($errors)) : ?>
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <h3 class="col">Hello, <?php echo $user['name']; ?>!</h3>
            <ul>
                <li><a href="/cabinet/edit">Change account data</a></li>
            </ul>
        </div>
    </div>
</section><br />

<?php include ROOT . '/views/layouts/footer.php'; ?>