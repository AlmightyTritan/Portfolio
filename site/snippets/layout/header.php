<?
// Handling default values
$htmlTitle = $htmlTitle ?? false;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name=viewport content="width=device-width, initial-scale=1">
        <meta name="description" content="<?= $site->description()->html() ?>">
        <title><? ecco($htmlTitle, $htmlTitle . ' - ') ?><?= $site->title() ?></title>
        <?= css('assets/css/build.css') ?>
    </head>
    <body>
        <div class="app-root">
