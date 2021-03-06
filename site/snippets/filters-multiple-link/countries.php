<div>
<span class="filterTitle">Filtrer par Pays</span>
    <?php foreach($countries as $co): ?>
    <?php if($co == urldecode(param('country'))): ?>
    <a title="Supprimer le filtre" class="filterSingleReset <?= Str::slug($co) ?>" href="<?= url($page->url(), ['params' => ['year' => urldecode($year), 'type' => urldecode($type), 'support' => urldecode($support), 'label' => urldecode($label), 'worldregion' => urldecode($worldregion)]]) ?>">
        <span>X</span><?= html($co) ?></a>
    <?php else : ?>
    <a title="Toutes les disques du pays: <?= html($co) ?>" class="btnFilter <?= Str::slug($co) ?>"
        href="<?= url($page->url(), ['params' => ['year' => urldecode($year), 'type' => urldecode($type), 'support' => urldecode($support), 'label' => urldecode($label), 'country' => urldecode($co), 'worldregion' => urldecode($worldregion)]]) ?>"><?= html($co) ?></a>
    <?php endif;?>
    <?php endforeach ?>
</div>

