<li class="article-meta-item">
  <i class="fa fa-calendar"></i> <em><?= $article->date('F jS, Y') ?></em>
</li>

<li class="article-meta-item">
    <?php if(($user = $site->user($article->author())) && ($avatar = $user->avatar())): ?>
      <?= thumb($avatar, array('width' => 25, 'height' => 25, 'crop' => true)) ?>
    <?php else: ?>
      <?php $avatar = new Asset('assets/images/default-avatar.png'); ?>
      <?= thumb($avatar, array('width' => 25, 'height' => 25, 'crop' => true)) ?>
    <?php endif ?>

    <?php if((($user = $site->user($article->author())) && ($user->firstName())) && (($user = $site->user($article->author())) && ($user->lastname()))): ?>
      <em><?= $user->firstname() ?>
      <?= $user->lastname() ?></em>
    <?php else: ?>
      <em><?= $article->author() ?></em>
    <?php endif ?>
</li>
<li class="article-meta-item"><i class="fa fa-folder-open-o"></i>
  <em>
    <?php foreach(str::split($article->categories()) as $cat): ?>
      <a class="category" href="<?= url('blog/' . url::paramsToString(['category' => $cat])) ?>"><?= $cat ?></a>
    <?php endforeach ?>
  </em>
</li>
<li class="article-meta-item"><i class="fa fa-tags"></i>
  <em>
    <?php foreach(str::split($article->tags()) as $tag): ?>
      <a class="tagcloud" href="<?= url('blog/' . url::paramsToString(['tag' => $tag])) ?>"><?= $tag ?></a>
    <?php endforeach ?>
  </em>
</li>
