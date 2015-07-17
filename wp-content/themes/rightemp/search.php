<?php get_header(); ?>
<div id="mainpage_inner"><!-- Begin: mainpage_inner -->
	<div id="mainpage"><!-- Begin: mainpage -->
      <div class="contentPage">
            <div class="sideBar">
                          <div class="searchBox">
                               <?php dynamic_sidebar('searchbox'); ?>
                           </div>
                          <?php dynamic_sidebar('contactaddress'); ?>
                          <?php dynamic_sidebar('sitemap'); ?>
                        </div>
            <div class="contentmain">

                <div id="content" class="contentpart">
                    <?php if (have_posts()) : ?>
                
                        <?php while (have_posts()) : the_post(); ?>
                
                    <div class="post" id="post-<?php the_ID(); ?>">
                        <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                        <p class="meta"><small>Posted on <?php the_time('F jS, Y') ?> by <?php the_author() ?> <?php edit_post_link('Edit', ' | ', ''); ?></small></p>
                        <div class="entry">
                            <?php the_excerpt(); ?>
                        </div>
                        
                    </div>
                    <?php endwhile; ?>
                        <div class="navigation">
                            <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
                            <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
                        </div>
                <?php else : ?>
                    <h3 class="center">Not Found</h3>
                    <p class="center">Sorry, but you are looking for something that isn't here.</p>
                <?php endif; ?>
                </div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>