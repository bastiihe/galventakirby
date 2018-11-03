<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>

<div class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-9">
          <?php if($articles->count()): ?>
            <?php foreach($articles as $article): ?>
              <div class="columns">

              <?php if($article->template() == 'article.text'): // text posts ?>

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

              <?php elseif($article->template() == 'article.image'): // image posts ?>

                  <?php if($image = $article->coverimage()->toFile()): ?>
                  <div class="column is-4">
                    <?php if($image = $article->coverimage()->toFile()): ?>
                      <?= thumb($image, array('width' => 500, 'height' => 300, 'crop' => true)) ?>
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

              <?php elseif($article->template() == 'article.video'): // video posts ?>

                <div class="column is-4">
                  <?= $article->videolink()->embed(['lazyvideo' => true]) ?>
                </div>
                <div class="column">
                  <div class="content article-meta-content">
                    <h2><strong><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></strong></h2>
                      <ul class="article-meta has-text-centered-mobile">
                        <?php snippet('blog/meta', array('article' => $article)) ?>
                        <li class="article-meta-item"><i class="fa fa-film"></i></li>
                      </ul>
                      <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
                      <a href="<?= $article->url() ?>" class="article-more">read more</a>
                  </div>
                </div>

              <?php elseif($article->template() == 'article.quote'): // quote posts ?>

                <div class="column fix">
                  <div class="content article-meta-content">
                    <?= $article->text()->kirbytext() ?>
                      <ul class="article-meta fix has-text-centered-mobile">
                        <?php snippet('blog/meta', array('article' => $article)) ?>
                        <li class="article-meta-item"><i class="fa fa-quote-left"></i></li>
                      </ul>
                  </div>
                </div>

              <?php elseif($article->template() == 'article.link'): // link posts ?>

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

              <?php endif ?>

                </div>
                <hr />
              <?php endforeach ?>
            <?php else: ?>
              <p>This blog does not contain any articles yet.</p>
          <?php endif ?>
          <div class="columns">
            <div class="column pagination-n">
              <?php snippet('pagination') ?>
            </div>
          </div>
      </div>
      <div class="column is-3">
        <?php snippet('blog/sidebar', array('tags' => $tags)) ?>
      </div>

    </div>
  </div>
</div>

<?php snippet('footer') ?>
