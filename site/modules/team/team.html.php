<div class="section">
  <div class="container">
      <div class="columns">
        <div class="column has-text-centered content">
          <h2 class="title"><?= $module->subtitle() ?></h2>
        </div>
      </div>
      <div class="columns team is-multiline">
        <?php $team = $module->team()->toStructure() ?>
        <?php foreach($team as $t): ?>
          <div class="column is-3 content has-text-centered">
              <figure>
                <?php if($image = $t->img()->toFile()): ?>
                  <?= thumb($image, array('width' => 200, 'height' => 200, 'crop' => true)) ?>
                <?php endif ?>
              </figure>
              
              <span><strong><?= $t->name() ?></strong></span>
              <span><small><?= $t->position() ?></small></span>
              <span><a href="mailto:<?= $t->email() ?>"><i class="fa fa-envelope-o"></i></a></span>

            <?= $t->description()->kt() ?>
          </div>
        <?php endforeach ?>
      </div>
    </div>
</div>
