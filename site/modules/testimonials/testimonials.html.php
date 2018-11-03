<div class="section primary" <?php if($module->color() != ""): ?>style="background-color: <?= $module->color() ?><?php endif ?>">
  <div class="container">
    <div class="columns">
      <div class="column is-12">
        <div class="columns owl-recent-news owl-theme">
          <div id="testimonial-slider" class="owl-carousel">
            <?php $testimonials = $module->testimonials()->toStructure() ?>
            <?php foreach($testimonials as $t): ?>
              <div class="column">
                <article class="media" style="background-color: white">
                  <figure class="media-left">
                    <p class="image is-64x64">
                      <?php if($image = $t->img()->toFile()): ?>
                      <?= thumb($image, array('width' => 128, 'height' => 128, 'crop' => true)) ?>
                        <?php endif ?>
                    </p>
                  </figure>
                  <div class="media-content">
                    <div class="">
                      <p>
                        <strong><?= $t->name() ?></strong> <small><?= $t->description() ?></small>
                        <br>
                        <?= $t->quote()->kt() ?>
                      </p>
                    </div>
                  </div>
                </article>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
