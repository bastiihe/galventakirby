<?php $color_primary = $site->color_primary();  ?>

<style type="text/css">

a:hover, strong, .socialbar .level-item:hover a, .imageblock li:before,.article-meta-item:hover i,
.panel-block-category:hover .panel-icon, .article-meta-item:hover i {
  color: <?= $color_primary ?>;
}

.navbar-link::after {
  border: 1px solid <?= $color_primary ?>;
  border-right: 0;
  border-top: 0;
}

.owl-theme .owl-nav [class*=owl-], .owl-theme .owl-nav [class*=owl-]:hover, .article-link:hover,
.primary, .button.is-primary,.button.is-primary:hover, .button.is-primary.is-hovered, .pagination-n-item:hover,
.pagination-n-item:focus, a.pagination-n-item:hover, a.pagination-n-item:focus {
  background-color: <?= $color_primary ?>;
}

.panel-block-category:hover {
  border-left-color: <?= $color_primary ?>;
}

</style>
