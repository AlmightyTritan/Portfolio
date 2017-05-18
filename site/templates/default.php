<!-- Header Layout -->
<? snippet('layout/header', [
        'htmlTitle' => $page->title()
    ]) ?>

    <main class="view">
        <article class="page-content">
            <h2 class="page-content__header"><?= $page->title()->html() ?></h2>
            <?= $page->text()->kirbytext() ?>
        </article>
    </main>

<!-- Footer Layout -->
<? snippet('layout/footer') ?>
