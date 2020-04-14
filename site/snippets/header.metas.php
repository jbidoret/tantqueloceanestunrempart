<title><?= $site->title()->html() . r($page !== $site->homePage(),  ' – ' . $page->title()->html() ) ?></title>

<meta name="description" content="<?php e($page->text()->isNotEmpty(), $page->text()->excerpt(255), "Un texte de Quentin Armand – Design de Julien Bidoret – Maison des éditions.") ?>">
<meta name="keywords" content="<?= $site->keywords()->text() ?>">



<link rel="apple-touch-icon" sizes="180x180" href="<?= url('/assets/favicons/apple-touch-icon.png')?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?= url('/assets/favicons/favicon-32x32.png')?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?= url('/assets/favicons/favicon-16x16.png')?>">
<link rel="manifest" href="<?= url('/assets/favicons/site.webmanifest')?>">
<link rel="mask-icon" color="#154074" href="<?= url('/assets/favicons/safari-pinned-tab.svg')?>">
<link rel="shortcut icon" href="<?= url('/assets/favicons/favicon.ico')?>">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="msapplication-config" content="/assets/favicons/browserconfig.xml">
<meta name="theme-color" content="#154074">



<meta property="og:url" content="<?= $site->url() ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= r($page !== $site->homePage(), $page->title()->html() . ' | ') . $site->title()->html() ?>">
<meta property="og:description" content="<?php e($page->text()->isNotEmpty(), $page->text()->excerpt(255), "Un texte de Quentin Armand – Design de Julien Bidoret – Maison des éditions.") ?>">
<meta property="og:site_name" content="<?= $site->title() ?>">
<meta property="og:locale" content="<?= $kirby->language() ?>">

<?php
if ($page->cover()->isNotEmpty()) :
    $cover = $page->cover()->toFile();
else:
    $cover = page('home')->images()->first();
endif;
$og_cover = $cover->thumb(['width' => 1200, 'height' => 630, 'crop' => true]);
?>
<meta property="og:image" content="<?= $og_cover->url() ?>">
<meta property="og:image:width" content="<?= $og_cover->width() ?>">
<meta property="og:image:height" content="<?= $og_cover->height() ?>">

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@julienbidoret" />
<meta name="twitter:title" content="<?= $site->title() ?>" />
<meta name="twitter:description" content="<?php e($page->text()->isNotEmpty(), $page->text()->excerpt(255), "Un texte de Quentin Armand – Design de Julien Bidoret – Maison des éditions.") ?>" />
<meta name="twitter:image" content="<?= $og_cover->url() ?>" />


