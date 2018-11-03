<div class="section numbers">
  <div class="container">
      <div class="columns">
        <div class="column">
          <nav class="level">
            <?php $numbers = $module->numbers()->toStructure() ?>
            <?php foreach($numbers as $n): ?>
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">
                  <?= $n->text ?>
                </p>
                <p class="title">
                  <?= $n->number ?>
                </p>
              </div>
            </div>
            <?php endforeach ?>
          </nav>
        </div>
      </div>
    </div>
</div>
