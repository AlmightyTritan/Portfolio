<a class="project-preview" href="<?= $project->url() ?>">
    <div class="project-preview__featured-image">
        <? if ($project->openSource()->bool()): ?>
            <div class="project-preview__source-available">
                <i class="material-icons">code</i>
            </div>
        <? endif; ?>
        <? if ($project->featuredImage()->toFile()): ?>
            <img src="<?= $project->featuredImage()->toFile()->url() ?>" />
        <? endif; ?>
    </div>
    <div class="project-preview__details">
        <p class="project-preview__title"><?= $project->title()->html() ?></p>
        <p class="project-preview__subtitle"><?= $project->subtitle()->html() ?></p>
        <ul class="project-preview__tag-list">
            <? foreach ($project->tags()->split(',') as $tag): ?>
                <li class="project-preview__tag"><?= $tag ?></li>
            <? endforeach; ?>
        </ul>
    </div>
</a>
