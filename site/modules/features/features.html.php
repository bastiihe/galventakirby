<div class="section">
  <div class="container">
    <div class="columns features is-multiline is-mobile">
      <?php $count = 0 ?>
      <?php $features = $module->features()->toStructure() ?>
      <?php foreach($features as $f): ?>
      <div class="column <?php if($count >= 1): ?>is-half-mobile is-one-third-tablet<?php else: ?>is-12-mobile is-one-third-tablet<?php endif ?>">
        <div class="content">
            <?php if($f->top() == "img"): ?>
              <?php if($image = $f->img()->toFile()): ?>
                <figure>
                <?= thumb($image, array('width' => 750, 'height' => 469, 'crop' => true)) ?>
                </figure>
              <?php endif ?>
            <?php else: ?>
              <p>
                <i class="fa fa-<?= $f->faicon() ?> fa-4x"></i>
              </p>
            <?php endif ?>
          <strong><?= $f->title() ?></strong>
          <?= $f->subtitle()->kt() ?>
          <?php if (!detect()->isMobile()): ?>
          <?= $f->text()->kt() ?>
          <?php endif ?>
        </div>
      </div>
      <?php $count++; endforeach ?>
    </div>
  </div>
</div>
