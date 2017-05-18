<!-- Header Layout -->
<? snippet('layout/header', [
        'htmlTitle' => $page->title()
    ]) ?>

    <main class="view">
        <article class="page-content">
            <h2 class="page-content__header">
                <?= $page->title()->html() ?>
            </h2>
            <h4 class="page-content__subtitle"><?= $page->title()->html() ?></h4>
            <figure class="page-content__featured-image">
                <? if ($page->featuredImage()->toFile()): ?>
                    <img src="<?= $page->featuredImage()->toFile()->url() ?>" />
                <? endif; ?>
            </figure>
            <ul class="project-preview__tag-list">
                <? foreach ($page->tags()->split(',') as $tag): ?>
                    <li class="project-preview__tag"><?= $tag ?></li>
                <? endforeach; ?>
            </ul>
            <?= $page->text()->kirbytext() ?>
            <? if ($page->externalLink()): ?>
                <a class="button" href="<?= $page->externalLink()->html() ?>">
                    <? e($page->openSource()->bool(), '<i class="material-icons">code</i>source code', '<i class="material-icons">web</i>live version') ?>
                </a>
            <? endif; ?>
        </article>
    </main>

<!-- Footer Layout -->
<? snippet('layout/footer') ?>
