<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <meta name="keywords" content="<?= $site->keywords()->html() ?>">
  <meta property="og:title" content="<?= $site->title()->html() ?>" />
  <meta property="og:description" content="<?= $site->description()->html() ?>" />
  <meta property="og:image" content="/assets/images/ogimage.png" />
  <?php if($favicon = $site->favicon()->toFile()): ?>
  <link rel="icon" href="<?= $favicon->url() ?>" type="image/x-icon">
  <?php endif ?>

  <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon-60x60.png" sizes="60x60">

  <?= css('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') ?>
  <?= css('assets/css/bulma.css') ?>
  <?= css('assets/css/owl.carousel.min.css') ?>
  <?= css('assets/css/carousel.css') ?>
  <?= css('assets/css/simpleLightbox.min.css') ?>
  <?= css('assets/css/index.css') ?>
  <?= css('assets/css/custom.css') ?>

  <?php snippet('colors') ?>

</head>
<body>
  <?php snippet('menu') ?>
