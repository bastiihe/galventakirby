<div class="sectionsocialbar">
  <div class="container">
    <div class="columns">
      <div class="column">
        <nav class="level socialbar is-mobile">
              <div class="level-left">
                <?php $socialbar = $site->socialbar()->toStructure() ?>
                <?php foreach($socialbar as $s): ?>
                  <div class="level-item">
                    <a href="<?= $s->url() ?>">
                      <i class="fa fa-<?= $s->company() ?>"></i>
                    </a>
                  </div>
                <?php endforeach ?>
              </div>
              <div class="level-right">
                <?php if($site->page('contact')): ?>
                  <div class="level-item">
                    <a href="<?= $site->page('contact')->url() ?>"><h3>Contact</h3></a>
                  </div>
                <?php endif ?>
                <?php if($site->page('faq')): ?>
                  <div class="level-item">
                    <a href="<?= $site->page('faq')->url() ?>">FAQ</h3></a>
                  </div>
                <?php endif ?>
              </div>
            </nav>
      </div>
    </div>
  </div>
</div>
