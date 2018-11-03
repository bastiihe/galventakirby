<nav class="panel">
  <p class="panel-heading">
    <?= $page->sidebar_category() ?>
  </p>
  <?php foreach($cats as $c): ?>
  <a href="<?= url('blog/' . url::paramsToString(['category' => $c])) ?>" class="panel-block panel-block-category">
    <span class="panel-icon">
      <i class="fa fa-folder-open-o"></i>
    </span>
    <?= $c ?>
  </a>
  <?php endforeach ?>
</nav>

<nav class="panel">
  <p class="panel-heading">
    <?= $page->sidebar_tags() ?>
  </p>

  <div class="panel-block">
    <div class="tags">
    <?php foreach($tags as $t): ?>
      <a href="<?= url('blog/' . url::paramsToString(['tag' => $t])) ?>" class="tag is-dark"><?= $t ?></a>
    <?php endforeach ?>
    </div>
  </div>
</nav>

<nav class="panel">
  <p class="panel-heading">
    <?= $page->sidebar_projects() ?>
  </p>

  <div class="panel-block panel-block-projects">
  <?php $projects = page('projects')->children()->visible()->flip()->limit(3) ?>
  <div id="projects" class="owl-carousel owl-theme">
    <?php foreach($projects as $p): ?>

      <div class="content has-text-centered">
        <p>
          <a href="<?= $p->url() ?>">
            <?php if($image = $p->coverimage()->toFile()): ?>
            <?= thumb($image, array('width' => 750, 'height' => 469, 'crop' => true)) ?>
            <?php endif ?>
            <br />
            <b><?= $p->title() ?></b>
            <br />
            <?= $p->subtitle() ?>
          </a>
        </p>

      </div>


    <?php endforeach ?>
  </div>
  </div>
</nav>
