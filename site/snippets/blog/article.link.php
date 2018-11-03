<div class="column fix">
  <div class="columns has-text-centered">
    <a class="column" href="<?= $article->link() ?>">

      <div class="content article-link">
        <h2><strong><?= $article->title()->html() ?></strong></h2>
        <h6 class="title"><em><?= $article->link() ?></em></h6>
      </div>
    </a>
  </div>
  <div class="columns">
    <div class="column">
      <div class="content article-meta-content">
          <ul class="article-meta fix has-text-centered-mobile">
            <?php snippet('blog/meta', array('article' => $article)) ?>
            <li class="article-meta-item"><i class="fa fa-link"></i></li>
          </ul>
      </div>
    </div>
  </div>
</div>
