<?php snippet('header') ?>

<?php snippet('contact/map') ?>

<div class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-7 is-offset-1 content">
          <h3>Send us an Email</h3>
          <form id="contact-form" action="https://formspree.io/<?= $page->email_sender() ?>" method="POST">
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label">Name</label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" type="name" id="name" placeholder="Name" required/>
                  <span class="icon is-small is-left">
                    <i class="fa fa-user-o"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" type="email" id="email" placeholder="Email" required/>
                  <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <input class="is-hidden" type="text" name="_gotcha">
              <input class="is-hidden" type="hidden" name="Subject" value="<?= $page->email_subject() ?>">
              <div class="field">
                <label class="label">Text</label>
                <div class="control">
                  <textarea class="textarea" id="message" name="message" rows="8" placeholder="Explain how we can help you" required/></textarea>
                </div>
              </div>
              <div class="field">
                <div class="control">
                  <button class="button is-primary" id="contact-form-submit">
                    Send message
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="column is-2 content has-text-centered-mobile">
        <?php $branches = $page->branches()->toStructure() ?>
        <?php foreach($branches as $b): ?>
          <div class="branches">
            <h3><?= $b->location() ?></h3>
            <?= $b->address()->kt() ?>
            <p>
              <strong>Email:</strong> <?= $b->email() ?>
              <br />
              <strong>Phone:</strong> <?= $b->phone() ?>
              <br />
              <strong>Fax:</strong> <?= $b->fax() ?>
            </p>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
