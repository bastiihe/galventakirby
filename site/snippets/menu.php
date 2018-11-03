      <nav class="navbar is-white">
        <div class="container">
          <div class="navbar-brand is-hidden-desktop">
            <a class="navbar-item" href="<?= $site->url() ?>">
              <?php if($image = $site->logo()->toFile()): ?>
              <img src="<?= $image->url() ?>" width="112" height="28" />
              <?php else: ?>
                <h1 class="title">
                  <?= $site->title()->html() ?>
                </h1>
              <?php endif ?>
            </a>
            <div class="navbar-burger burger" data-target="navMenu">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>

          <div id="navMenu" class="navbar-menu">
            <a class="logo--custom" href="<?= $site->url() ?>"><img src="<?= $image->url() ?>" width="210px" /></a>

            <div class="<?php if(!detect()->isMobile() || (detect()->isMobile() && detect()->isTablet())): ?>nav-center<?php endif ?><?php if (detect()->isMobile()): ?>navbar-start<?php endif ?>">

              <?php foreach($pages->visible() as $p): ?>
              <?php $ptitle = ($p->menu_title()->isEmpty() ? $p->title()->html() : $p->menu_title()->html()) ?>
              <?php if ($p->hasvisibleChildren() && $p->template() != 'blog' && $p->template() != 'home'): ?>

              <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="<?= $p->url() ?>">
                  <strong><?= $ptitle ?></strong>
                </a>
                <div class="navbar-dropdown">
                  <?php foreach($p->children() as $n): ?>
                  <?php $ntitle = ($n->menu_title()->isEmpty() ? $n->title()->html() : $n->menu_title()->html());?>
                  <a class="navbar-item" href="<?= $n->url() ?>">
                    <?= $ntitle ?>
                  </a>
                  <?php endforeach ?>
                </div>
              </div>
              <?php else: ?>
              <a class="navbar-item <?php e($p->isOpen(), ' active') ?>" href="<?= $p->url() ?>">
                <strong><?= $ptitle ?></strong>
              </a>
              <?php endif ?>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </nav>
