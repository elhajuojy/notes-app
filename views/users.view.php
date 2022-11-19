<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach ($users as $user) : ?>
            <li>
                <a href="/user?id=<?= $user['id'] ?>" class="text-blue-500 hover:underline">
                    <?= $user['email'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </div>
</main>

<?php require('partials/footer.php') ?>