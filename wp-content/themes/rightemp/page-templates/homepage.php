<?php
/**
 * Template Name: homepage
 *
 * @package WordPress
 * @subpackage AT
 * @since at 1.0
 */

get_header(); ?>
<div class="banner">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="bannerpart">
        <?php dynamic_sidebar('homerbanner'); ?>
      </div>
    </div>
  </div>
</div>
</div>
<div class="itemthree">
  <div class="container">
    <div class="row">
    <div class="itemthreewrapper">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="itemthreea itemthreebg">
          <?php dynamic_sidebar('itemthree-a'); ?>
        </div>       
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="itemthreeb itemthreebg">
          <?php dynamic_sidebar('itemthree-b'); ?>
        </div>       
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="itemthreec itemthreebg">
          <?php dynamic_sidebar('itemthree-c'); ?>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<div class="ourcurrent">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
       <h2>OUR CURRENT SPECIALS</h2>
        <div class="ourcurrenttext">
          <div class="icontop"></div>
           <div class="offer">
             <?php dynamic_sidebar('offer-a'); ?>
           </div>
           <div class="offer">
             <?php dynamic_sidebar('offer-b'); ?>
           </div>
           <div class="offer">
             <?php dynamic_sidebar('offer-c'); ?>
           </div>
           <div class="offer">
             <?php dynamic_sidebar('offer-d'); ?>
           </div>
           <div class="iconbottom"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="whatpeople">
        <div class="whatpeopletext">
          <?php dynamic_sidebar('whatpeople'); ?>
        </div>
</div>

<div class="about">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="abouttext">
          <?php dynamic_sidebar('abouttext'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End: pagebottom -->

<?php get_footer(); ?>
