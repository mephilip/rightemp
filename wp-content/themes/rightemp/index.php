
<?php get_header(); ?>
<!-- main content -->
<div class="contentpart">
  <div class="container">
    <div class="col-md-9 col-xs-12">
      <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
      <div class="contenttext">
        <h3>
          <?php the_title(); ?>
        </h3>
        <?php the_content(); ?>
        <?php edit_post_link( __( 'Edit', 'ym' ), '<span class="edit-link">', '</span>' ); ?>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="col-md-3 col-xs-12">
      <div class="rightsidebar">
        <?php dynamic_sidebar('rightside'); ?>
      </div>
    </div>
  </div>
</div>
    
<!-- main content -->
            
               
<?php get_footer(); ?>