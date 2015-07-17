<div id="footerpart">
  <div class="footertop">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="linkpart">
            <?php dynamic_sidebar('linkiteam'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footermid">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-7 col-xs-12 emailaddress">
          <?php dynamic_sidebar('emailaddress'); ?>
        </div>
        <div class="col-lg-5 col-md-5 col-xs-12 social-buttons">
          <?php dynamic_sidebar('socialicon'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="footerlast">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12 footermenu">
          <?php dynamic_sidebar('footernav'); ?>
        </div>
        <div class="col-md-12 col-xs-12 copy_right">
          <?php dynamic_sidebar('copyright'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body></html>