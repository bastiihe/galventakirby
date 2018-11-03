<div class="section imageblock">
  <div class="container">
    <div class="columns is-vcentered">
      <?php if($module->leftright() == "left"): ?>
        <div class="column is-6">
          <?php if($image = $module->left()->toFile()): ?>
            <?= thumb($image, array('width' => 750, 'height' => 469, 'crop' => true)) ?>
          <?php endif ?>
        </div>
        <div class="column is-6 content">
          <?= $module->right()->kt() ?>
        </div>
      <?php else: ?>
        <div class="column is-6 content">
          <?= $module->right()->kt() ?>
        </div>
        <div class="column is-6">
          <?php if($image = $module->left()->toFile()): ?>
            <?= thumb($image, array('width' => 750, 'height' => 469, 'crop' => true)) ?>
          <?php endif ?>
        </div>
      <?php endif ?>
    </div>
  </div>
</div>
