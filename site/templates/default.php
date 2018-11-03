<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>

<?php $page->modules() ?>

<div class="section">
  <div class="container">
    <div class="columns">
      <div class="column content">
        <?= $page->text()->kirbytext() ?>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
