<ul class="article-meta content">
  <li class="article-meta-item">
    <i class="fa fa-calendar"></i> <em><?= $page->date('F jS, Y') ?></em>
  </li>
  <li class="article-meta-item">
      <?php if(($user = $site->user($page->author())) && ($avatar = $user->avatar())): ?>
        <?= thumb($avatar, array('width' => 25, 'height' => 25, 'crop' => true)) ?>
      <?php else: ?>
        <?php $avatar = new Asset('assets/images/default-avatar.png'); ?>
        <?= thumb($avatar, array('width' => 25, 'height' => 25, 'crop' => true)) ?>
      <?php endif ?>

      <?php if((($user = $site->user($page->author())) && ($user->firstName())) && (($user = $site->user($page->author())) && ($user->lastname()))): ?>
        <em><?= $user->firstname() ?>
        <?= $user->lastname() ?></em>
      <?php else: ?>
        <em><?= $page->author() ?></em>
      <?php endif ?>
  </li>
  <li class="article-meta-item"><i class="fa fa-folder-open-o"></i>
    <em>
      <?php foreach(str::split($page->categories()) as $cat): ?>
        <a class="category" href="<?= url('blog/' . url::paramsToString(['category' => $cat])) ?>"><?= $cat ?></a>
      <?php endforeach ?>
    </em>
  </li>
  <li class="article-meta-item"><i class="fa fa-tags"></i>
    <em>
      <?php foreach(str::split($page->tags()) as $tag): ?>
        <a class="tagcloud" href="<?= url('blog/' . url::paramsToString(['tag' => $tag])) ?>"><?= $tag ?></a>
      <?php endforeach ?>
    </em>
  </li>

</ul>
