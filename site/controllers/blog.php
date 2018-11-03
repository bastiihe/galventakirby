 <?php

return function($site, $pages, $page) {

  $count = 0;
  $perpage  = page('blog')->perpage()->int();
  $articles = page('blog')->children()->visible()->flip();

  $articlesFull = $articles;

  // add the tag filter
  if($tag = param('tag')) {
    $articles = $articles->filterBy('tags', $tag, ',');
  }

  //add the category filter
  if($cat = param('category')) {
    $articles = $articles->filterBy('categories', $cat);
  }

  // fetch all tags
  $tags = $articlesFull->pluck('tags', ',', true);
  // fetch all categories
  $cats = $articlesFull->pluck('categories', ',', true);

  $articles = $articles->paginate($perpage);
  $pagination = $articles->pagination();

  return [
    'articles'      => $articles,
    'articlesFull'  => $articlesFull,
    'pagination'    => $pagination,
    'count'         => $count,
    'tags'          => $tags,
    'tag'           => $tag,
    'cats'          => $cats,
    'cat'           => $cat,
  ];

};
