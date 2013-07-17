<?php get_header(); ?>

		<div class="col1">

		<?php if (have_posts()) : ?>
	
			<?php while (have_posts()) : the_post(); ?>		

				<div id="archivebox">
					
						<h2><em><?php _e('Categorized',woothemes); ?> |</em> <?php the_category(', ') ?></h2>
						<?php if (function_exists('the_tags')) { ?><div class="singletags"><?php the_tags('Tags | ', ', ', ''); ?></div><?php } ?>        
				
				</div><!--/archivebox-->			

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
				
				<div id="comment">
					<?php comments_template(); ?>
				</div>
                
                <div style="margin-bottom:25px;">
                <br />
                <b>Party On, Wayne!:</b>
                <?php get_related_posts_thumbnails(); ?></div>

		<?php endwhile; ?>
		
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries',woothemes)) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Next Entries &raquo;',woothemes)) ?></div>
		</div>		
	
	<?php endif; ?>							

		</div><!--/col1-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>