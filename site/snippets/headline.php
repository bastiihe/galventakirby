<div class="section headline well is-hidden-mobile">
  <div class="container">
    <div class="columns is-vcentered">
      <div class="column">
        <nav class="level">
          <div class="level-left">
            <div class="level-item">
                <?php if($image = $site->logo()->toFile()): ?>
                <a href="<?= $site->url() ?>"><img src="<?= $image->url() ?>" width="150px" /></a>
                <?php else: ?>
                  <h1 class="title">
                    <?= $site->title()->html() ?>
                  </h1>
                <?php endif ?>
            </div>
          </div>
          <div class="level-right">
            <?php $headlines = $site->headline()->toStructure() ?>
            <?php foreach($headlines as $h): ?>
              <div class="level-item">
                <article class="media">
                  <figure class="media-left">
                    <p class="image headline-icon">
                      <i class="fa fa-<?= $h->icon ?>"></i>
                    </p>
                  </figure>
                  <div class="media-content">
                    <div class="content">
                      <p>
                        <strong><?= $h->name ?></strong>
                        <br>
                        <?php if($h->category() == "phone"): ?>
                        <?= $h->phone ?>
                        <?php elseif($h->category() == "email"): ?>
                          <?= $h->email ?>
                        <?php elseif($h->category() == "fax"): ?>
                          <?= $h->fax ?>
                        <?php elseif($h->category() == "openinghours"): ?>
                          <?= $h->openinghours ?>
                        <?php elseif($h->category() == "address"): ?>
                          <?= $h->address ?>
                        <?php elseif($h->category() == "event"): ?>
                          <?= $h->event ?>
                        <?php endif ?>
                      </p>
                    </div>
                  </div>
                </article>
              </div>
            <?php endforeach ?>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
