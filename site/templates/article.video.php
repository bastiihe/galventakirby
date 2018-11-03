<?php snippet('header') ?>

<div class="section article hero">
  <div class="container has-text-centered">
    <h1 class="title"><?= $page->title() ?></h1>
    <?php snippet('article/meta') ?>
    </nav>
  </div>
</div>
<div class="section">
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-8">
        <article>
          <div class="content">
            <?= $page->videolink()->kirbytext() ?>
            <?= $page->text()->kirbytext() ?>
          </div>
        </article>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
