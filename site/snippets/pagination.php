<?php if($pagination->hasPages()): ?>
  <nav class="pagination-n">

    <?php if($pagination->hasPrevPage()): ?>
      <a class="pagination-n-item left" href="<?= $pagination->prevPageURL() ?>" rel="prev" title="newer articles">
        <?= (new Asset("assets/images/arrow-left.svg"))->content() ?>
      </a>
    <?php else: ?>
      <span class="pagination-n-item left is-inactive">
        <?= (new Asset("assets/images/arrow-left.svg"))->content() ?>
      </span>
    <?php endif ?>

    <?php if($pagination->hasNextPage()): ?>
      <a class="pagination-n-item right" href="<?= $pagination->nextPageURL() ?>" rel="next" title="older articles">
        <?= (new Asset("assets/images/arrow-right.svg"))->content() ?>
      </a>
    <?php else: ?>
      <span class="pagination-n-item right is-inactive">
        <?= (new Asset("assets/images/arrow-right.svg"))->content() ?>
      </span>
    <?php endif ?>

  </nav>
<?php endif ?>
