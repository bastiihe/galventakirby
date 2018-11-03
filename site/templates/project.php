<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>

<div class="section">
  <div class="container">
    <div class="columns">
      <div class="column">
        <div class="content">
          <?= $page->text()->kirbytext() ?>
        </div>
      </div>
    </div>
    <?php $count = $page->images()->count() ?>
    <div class="columns lightbox <?php if($count >= 3): ?>is-multiline<?php elseif($count == 1): ?>has-text-centered<?php endif ?>">
        <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
          <div class="column <?php if($count >= 3): ?>is-4<?php endif ?>">
            <a href="<?= $image->url() ?>">
              <?= thumb($image, array('width' => 750, 'height' => 469, 'crop' => true)) ?>
            </a>
          </div>
        <?php endforeach ?>
      </div>
      <div class="columns">
        <div class="column">
          <?php snippet('prevnext') ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
