<div class="section recent-projects">
  <div class="container">
    <div class="columns features">
      <?php $projects = page('projects')->children()->visible()->flip()->limit(3) ?>
        <?php foreach($projects as $p): ?>
          <div class="column is-4">
              <figure class="imgoverlay">
                <?php if($image = $p->coverimage()->toFile()): ?>
                  <?= thumb($image, array('width' => 750, 'height' => 469, 'crop' => true)) ?>
                <?php endif ?></a>
                <figcaption>
                  <h3><?= $p->subtitle() ?></h3>
                  <h4><?= $p->year() ?></h4>
                </figcaption>
                <a href="<?= $p->url() ?>"></a>
              </figure>
              <div class="content">
              <p>
                <b><?= $p->title() ?></b>
                <br />
              </p>
              <p>
                <?= $p->text()->excerpt(20, 'words') ?>
              </p>
            </div>
          </div>
        <?php endforeach ?>
    </div>
  </div>
</div>
