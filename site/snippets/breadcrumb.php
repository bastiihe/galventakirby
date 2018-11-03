<div class="well">
  <div class="section hero">
    <div class="container">
      <nav class="level">
        <div class="level-left">
          <div class="level-item">
            <h1 class="title"><?php $ptitle = ($page->menu_title()->isEmpty() ? $page->title()->html() : $page->menu_title()->html()) ?>
              <?= $ptitle ?>
            </h1>
          </div>
          <div class="level-item">
            <h2 class="subtitle"><?= $page->subtitle() ?> <?= $page->year() ?>
            <?php $params = params()?>
            <?php foreach($params as $key => $val){
              $filter = $val;
            };?>
              <?php $removeFilter = '</span><a class="tag is-delete" href="'.$page->url().'"></a>'?>
              <?php $beforeFilter = '<div class="tags has-addons"><span class="tag is-primary">'?>
              <?php $afterFilter  = '</div>'?>
              <?= (empty($params) ? '' : $beforeFilter. $filter.' '.$removeFilter .$afterFilter);?>
            </h2>
          </div>
        </div>
        <div class="level-right">
          <nav class="breadcrumb is-right" aria-label="breadcrumbs">
            <ul>
              <?php foreach($site->breadcrumb() as $crumb): ?>
              <?php if($crumb->is($site->breadcrumb()->last())): ?>
              <li class="is-active">
                <a href="<?= $crumb->url() ?>">
                  <?= html($crumb->title()) ?>
                </a>
              </li>
              <?php else: ?>
              <li>
                <a href="<?= $crumb->url() ?>">
                  <?= html($crumb->title()) ?>
                </a>
              </li>
              <?php endif ?>
              <?php endforeach ?>
            </ul>
          </nav>
        </div>
      </nav>
    </div>
  </div>

</div>
