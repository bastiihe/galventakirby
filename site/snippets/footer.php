<footer class="footer">
  <div class="container">
    <div class="columns">
      <div class="column">
        <div class="columns is-vcentered">
          <div class="column is-narrow has-text-centered-mobile">
            <?php if($image = $site->logo()->toFile()): ?>
            <img src="<?= $image->url() ?>" width="112" height="28" />
            <?php endif ?>
          </div>
          <div class="column">
            <?= $site->footer() ?>
          </div>
        </div>
        <hr />
        <div class="columns is-multiline is-mobile">
          <div class="column is-12">
            <div class="level has-text-centered-mobile">
              <div class="level-left">
                <div class="level-item">
                  <ul class="article-meta">
                      <?php foreach($pages->visible() as $p): ?>
                        <?php $ptitle = ($p->menu_title()->isEmpty() ? $p->title()->html() : $p->menu_title()->html()) ?>
                        <li class="article-meta-item">
                          <a href="<?= $p->url() ?>">
                            <?= $ptitle ?>
                          </a>
                        </li>
                      <?php endforeach ?>
                    </ul>
                </div>
              </div>
              <div class="level-right">
                <div class="level-item">
                  <ul class="socialbar">
                    <?php $socialbar = $site->socialbar()->toStructure() ?>
                    <?php foreach($socialbar as $s): ?>
                      <li>
                        <a href="<?= $s->url() ?>">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-square-o fa-stack-2x"></i>
                            <i class="fa fa-<?= $s->company() ?> fa-stack-1x"></i>
                          </span>
                        </a>
                      </li>
                    <?php endforeach ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="column is-12 has-text-centered-mobile">
            <?= $site->copyright()->kt() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

</body>

<?= js('assets/js/jquery-3.2.1.min.js') ?>
<?= js('assets/js/owl.carousel.min.js') ?>
<?= js('assets/js/carousel.js') ?>
<?= js('assets/js/simpleLightbox.js') ?>
<?= js('assets/plugins/embed/js/embed.js') ?>
<?= js('assets/js/menu.js') ?>

<script type="text/javascript">
$(document).ready(function(){
    $("#projects").owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      dots:true,
      autoplaySpeed:5000,
      autoplay:true,
      autoplayHoverPause:false,
      responsive:{
          0:{
              items:1,
          },
          600:{
              items:1,
          }
      }
    })
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      dots:true,
      autoplaySpeed:5000,
      autoplay:true,
      smartSpeed:1000,
      autoplayHoverPause:false,
      responsive:{
          0:{
              items:1,
          },
          600:{
              items:1,
          },
          1000:{
              items:2,
              loop:true,
          }
      }
    })
});
</script>

<script type="text/javascript">
$('.lightbox a').simpleLightbox();
</script>

</html>
