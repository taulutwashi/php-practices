<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'?>

<?php require 'partials/banner.php'?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <p>This is Notes page </p>
        <?php foreach ($notes as $note): ?>
            <li>
                <a href="/note?id=<?= $note['id']?>"><?= htmlspecialchars($note['body'])?></a>
            </li>
        <?php endforeach;?>
        <p class="mt-10">
            <a href="/note/create">Create Note</a>
        </p>
    </div>
</main>
<?php require 'partials/footer.php'?>
