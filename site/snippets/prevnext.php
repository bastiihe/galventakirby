<?php

$directionPrev = @$flip ? 'right' : 'left';
$directionNext = @$flip ? 'left'  : 'right';

if($page->hasNextVisible() || $page->hasPrevVisible()): ?>
  <nav class="pagination-n <?= !@$flip ?: ' flip' ?> wrap cf">

    <?php if($page->hasPrevVisible()): ?>
      <a class="pagination-n-item <?= $directionPrev ?>" href="<?= $page->prevVisible()->url() ?>" rel="prev" title="<?= $page->prevVisible()->title()->html() ?>">
        <?= (new Asset("assets/images/arrow-{$directionPrev}.svg"))->content() ?>
      </a>
    <?php else: ?>
      <span class="pagination-n-item <?= $directionPrev ?> is-inactive">
        <?= (new Asset("assets/images/arrow-{$directionPrev}.svg"))->content() ?>
      </span>
    <?php endif ?>

    <?php if($page->hasNextVisible()): ?>
      <a class="pagination-n-item <?= $directionNext ?>" href="<?= $page->nextVisible()->url() ?>" rel="next" title="<?= $page->nextVisible()->title()->html() ?>">
        <?= (new Asset("assets/images/arrow-{$directionNext}.svg"))->content() ?>
      </a>
    <?php else: ?>
      <span class="pagination-n-item <?= $directionNext ?> is-inactive">
        <?= (new Asset("assets/images/arrow-{$directionNext}.svg"))->content() ?>
      </span>
    <?php endif ?>

  </nav>
<?php endif ?>
