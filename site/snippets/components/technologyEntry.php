<li class="technology-entry">
    <?php if ($entry->icon()->toFile()): ?>
        <img class="technology-entry__icon" src="<?= $entry->icon()->toFile()->url() ?>" />
    <?php endif; ?>
    <span class="technology-entry__name"><?= $entry->name()->html() ?></span>
</li>
