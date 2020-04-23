<?php $ps = page('pages')->children()->listed()  ?>
<?php foreach ($ps as $p) :?>
    <article 
        data-description="<?= $p->text()->excerpt(255) ?>" 
        <?php
        if ($p->cover()->isNotEmpty()) :
            $cover = $p->cover()->toFile();
        else:
            $cover = page('home')->images()->first();
        endif;
        $og_cover = $cover->thumb(['width' => 1200, 'height' => 630, 'crop' => true]);
        ?>
        data-image="<?= $og_cover->url() ?>" 
        data-title="<?= $site->title() ?> – <?= $p->sl() ?>"
        data-url="<?= $p->url() ?>#<?= str::Slug($p->sl()) ?>" 
        id="<?= str::Slug($p->sl()) ?>">
        <h1><?= $p->num() ?></h1>
        <div class="content tpl-<?= $p->tpl() ?>">
        <?php if($p->emailprefix()->isNotEmpty() && $p->tpl() == "email" ) :?>
                <aside class="prefix">
                    <?= $p->emailprefix()->kt() ?>
                </aside>
            <?php endif ?>
            <?php if($p->letterprefix()->isNotEmpty() && $p->tpl() == "letter" ) :?>
                <aside class="prefix">
                    <?= $p->letterprefix()->kt() ?>
                </aside>
            <?php endif ?>
            <?php if($p->recitprefix()->isNotEmpty() && $p->tpl() == "recit" ) :?>
                <aside class="prefix">
                    <?= $p->recitprefix()->kt() ?>
                </aside>
            <?php endif ?>
            <div class="text">
                <?= $p->text()->kt() ?>
            </div>
        </div>
    </article>
<?php endforeach ?>