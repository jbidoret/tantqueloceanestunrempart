<!DOCTYPE html>
<html lang="<?php echo $kirby->language() ?? 'fr' ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="cleartype" content="on">

    <script>document.getElementsByTagName('html')[0].className = 'js'</script>

    <?php snippet("header.metas") ?>

    <?= css('assets/css/main.css') ?>

</head>
<body
    id="container"  
    data-login="<?php e($kirby->user(),'true', 'false') ?>"
    data-template="<?php echo $page->template() ?>"
    data-intended-template="<?php echo $page->intendedTemplate() ?>">

    <header class="header">
        <a class="logo" href="<?= $site->url() ?>">
        Tant que<br> l’océan<br> est un<br> rempart
        </a>
    </header>

    <main class="page" id="main">
        <nav>
        <?php $ps = page('pages')->children()->listed()  ?>
        <button><span>≈</span></button>
        <ul>
        <?php foreach ($ps as $p) :?>
            <li><a href="#<?= str::Slug($p->sl()) ?>"><?= $p->num() ?></a></li>
        <?php endforeach ?>
        </ul>
        </nav>