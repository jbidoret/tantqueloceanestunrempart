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
        <figure>
            <img src="<?= url('assets/css/hokusai.png') ?>" alt="">
        </figure>
        <a class="logo" href="<?= $site->url() ?>">
            Tant que <br> l’océan est<br>  un rempart
            <br>
            <span>Quentin <br>Armand</span>
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