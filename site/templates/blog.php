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

              <?php snippet('blog/article.text', array('article' => $article)) ?>

              <?php elseif($article->template() == 'article.image'): // image posts ?>

              <?php snippet('blog/article.image', array('article' => $article)) ?>

              <?php elseif($article->template() == 'article.video'): // video posts ?>

              <?php snippet('blog/article.video', array('article' => $article)) ?>

              <?php elseif($article->template() == 'article.quote'): // quote posts ?>

              <?php snippet('blog/article.quote', array('article' => $article)) ?>

              <?php elseif($article->template() == 'article.link'): // link posts ?>

              <?php snippet('blog/article.link', array('article' => $article)) ?>

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
