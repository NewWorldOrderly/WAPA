<?php get_header(); ?>

		<div class="col1">

		<?php if (have_posts()) : ?>
		
		<div id="archivebox">
        	
            	<h2><em><?php _e('Search Results','woothemes'); ?> |</em> "<?php printf(the_search_query());?>"</h2>        
		
		</div><!--/archivebox-->
	
			<?php while (have_posts()) : the_post(); ?>		

				<div class="post-alt blog" id="post-<?php the_ID(); ?>">
                <table  id="post-title" align="left">
                <tr>
                <td width="50px" cellpadding="2" valign="top">
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><img src="<?php bloginfo('template_directory') ?>/images/authors/<?php the_author_ID()?>.png" alt="<?php the_author(); ?>" title="<?php the_author(); ?>" /></a>
				</td>
                <td cellpadding="2" valign="bottom">
					<h3><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<p class="posted"><?php _e('Posted on',woothemes); ?> <?php the_time('d F Y'); ?> <?php _e('by',woothemes); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
		        </td>
                </tr>
                <tr>
                <td colspan="2">
                <div id="entry" class="entry">
				<?php the_content('<span class="continue">'.__('Continue Reading',woothemes).'</span>'); ?> 
				</div>
                </td>
                </tr>
                </table>


				
				</div><!--/post-->

		<?php endwhile; ?>
		
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries','woothemes')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Next Entries &raquo;','woothemes')) ?></div>
		</div>
		
		<?php else : ?>

		<div id="archivebox">
        	
            	<h2><em><?php _e('Search Results','woothemes'); ?> |</em> <?php _e('None Found!','woothemes'); ?></h2>
            	<div class="archivefeed"><?php _e('Sorry! Your search yielded no results. Please search again.','woothemes'); ?></div>				
		
		</div><!--/archivebox-->				
	
	<?php endif; ?>							

		</div><!--/col1-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>	
