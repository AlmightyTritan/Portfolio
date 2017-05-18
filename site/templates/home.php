<!-- Header Layout -->
<? snippet('layout/header') ?>

    <? if ($site->heroImage()->toFile()): ?>
        <section class="hero">
            <div class="hero__text">
                <h1 class="hero__title"><?= $site->title()->html() ?></h1>
                <p class="hero__subtitle"><?= $site->subtitle()->html() ?></p>
            </div>
            <img src="<?= $site->heroImage()->toFile()->url() ?>" />
        </section>
    <? endif; ?>

    <main class="view">
        <article class="page-content">
            <h2 class="page-content__header"><?= $page->title()->html() ?></h2>
            <?= $page->text()->kirbytext() ?>
            <? if($page->document()): ?>
                <a class="button" href="<?= $page->document()->url() ?>" download>Resume</a>
            <? endif ?>
        </article>

        <section class="project-list">
            <span class="project-list__header">
                <h2>Previous Projects</h2>
            </span>
            <? foreach ($projects as $project): ?>
                <!-- Project Preview Component -->
                <? snippet('components/projectPreview', [
                        'project' => $project,
                    ]) ?>
            <? endforeach; ?>
        </section>

        <section class="technology-grid">
            <ul class="technology-grid__list">
                <li class="technology-grid__list-header"><h2>Technologies</h2></li>
                <? foreach ($page->technologies()->toStructure() as $technology): ?>
                    <!-- Project Preview Component -->
                    <? snippet('components/technologyEntry', [
                            'entry' => $technology,
                        ]) ?>
                <? endforeach; ?>
            </ul>
            <ul class="technology-grid__list">
                <li class="technology-grid__list-header"><h2>Languages</h2></li>
                <? foreach ($page->languages()->toStructure() as $language): ?>
                    <!-- Project Preview Component -->
                    <? snippet('components/technologyEntry', [
                            'entry' => $language,
                        ]) ?>
                <? endforeach; ?>
            </ul>
            <ul class="technology-grid__list">
                <li class="technology-grid__list-header"><h2>Tools</h2></li>
                <? foreach ($page->tools()->toStructure() as $tools): ?>
                    <!-- Project Preview Component -->
                    <? snippet('components/technologyEntry', [
                            'entry' => $tools,
                        ]) ?>
                <? endforeach; ?>
            </ul>
        </section>

        <article class="page-content">
            <h2 class="page-content__header">Contact Me</h2>
            <?= $page->contactText()->kirbytext() ?>
        </article>
    </main>

<!-- Footer Layout -->
<? snippet('layout/footer') ?>
