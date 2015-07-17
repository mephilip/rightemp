
<?php get_header(); ?>
<!-- main content -->
        <div class="container main_heading">
            <div class="col-md-12">
				<?php if(have_posts()): ?>
                	<?php while(have_posts()): the_post(); ?>
                    <div class="welcome-note">
                	   <h3><?php the_title(); ?></h3>
                        <div class="entry-meta">
                        	<?php ym_entry_meta(); ?>
                        </div>
						<?php the_content(); ?>
                        <?php edit_post_link( __( 'Edit', 'te' ), '<span class="edit-link">', '</span>' ); ?>
                     </div>
                      <?php comments_template( '', true ); ?>
                	<?php endwhile; ?>
                <?php endif; ?>
               
            </div>
        </div>
    
<!-- main content -->
            
               
<?php get_footer(); ?>