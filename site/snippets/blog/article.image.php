<?php if($image = $article->coverimage()->toFile()): ?>
<div class="column is-4">
    <?php if($image = $article->coverimage()->toFile()): ?>
      <div class="lightbox">
        <a href="<?= $image->url() ?>">
          <?= thumb($image, array('width' => 500, 'height' => 300, 'crop' => true)) ?>
        </a>
      </div>
    <?php endif ?>
</div>
<?php endif ?>
<div class="column">
  <div class="content article-meta-content">
    <h2><strong><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></strong></h2>
      <ul class="article-meta has-text-centered-mobile">
        <?php snippet('blog/meta', array('article' => $article)) ?>
        <li class="article-meta-item"><i class="fa fa-image"></i></li>
      </ul>
    <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
    <a href="<?= $article->url() ?>" class="article-more">read more</a>
  </div>
</div>
