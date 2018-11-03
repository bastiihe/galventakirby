<div class="column fix">
  <div class="content article-meta-content">
    <?= $article->text()->kirbytext() ?>
      <ul class="article-meta fix has-text-centered-mobile">
        <?php snippet('blog/meta', array('article' => $article)) ?>
        <li class="article-meta-item"><i class="fa fa-quote-left"></i></li>
      </ul>
  </div>
</div>
