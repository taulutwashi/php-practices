<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'?>

<?php require 'partials/banner.php'?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <p>This is Notes page </p>


                <p href="/note?id=<?= $note['id']?>"><?=$note['body']?></p>


    </div>
</main>
<?php require 'partials/footer.php'?>