<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
    <?php $carousel = $module->carousel()->toStructure() ?>
    <?php $j = 0 ?>
    <?php foreach($carousel as $c): ?>
      <?php if($image = $c->img()->toFile()): ?>
        <div class="item <?php e($j==0, 'active');?>">
          <?= $image ?>
          <div class="section caption is-hidden-mobile">
            <div class="container">
              <div class="columns">
                <dic class="column caption-item is-4 content">
                  <?= $c->text()->kt() ?>
                </dic>
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>
    <?php $j++; endforeach ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="fa fa-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="fa fa-chevron-right"></span>
			</a>

</div>
