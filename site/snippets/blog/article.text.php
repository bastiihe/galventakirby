<div class="column">
  <div class="content article-meta-content">
    <h2><strong><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></strong></h2>
      <ul class="article-meta has-text-centered-mobile">
        <?php snippet('blog/meta', array('article' => $article)) ?>
        <li class="article-meta-item"><i class="fa fa-file-text-o"></i></li>
      </ul>
      <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
      <a href="<?= $article->url() ?>" class="article-more">read more</a>
  </div>
</div>
