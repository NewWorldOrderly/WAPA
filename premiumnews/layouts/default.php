<div class="box">

	<?php
		
		$the_query = new WP_Query('cat=-'. $GLOBALS[ex_feat] . '&showposts=' . get_option('woo_other_entries') . '&orderby=post_date&order=desc');
		
		$counter = 0; $counter2 = 0;
				
		while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
	?>
	
		<?php $counter++; $counter2++; ?>
				
		<div class="post <?php if ($counter == 1) { echo 'fl'; } else { echo 'fr'; $counter = 0; } ?>">
		
			<?php woo_image('height=57&width=100&class=th'); ?>
		
			<h2><?php the_category(', ') ?></h2>
			<h3><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<p class="posted"><?php _e('Posted on',woothemes); ?> <?php the_time('d F Y'); ?></p>
			<p><?php echo strip_tags(get_the_excerpt(), '<a><strong>'); ?> <span class="continue"><a title="<?php _e('Permanent Link to',woothemes); ?> <?php the_title(); ?>" href="<?php the_permalink() ?>"><?php _e('Continue Reading',woothemes); ?></a></span></p>
			<p class="comments"><?php comments_popup_link(__('Comments (0)',woothemes), __('Comments (1)',woothemes), __('Comments (%)',woothemes)); ?></p>
			
		</div><!--/post-->
		
	
	<?php endwhile; ?>
		
	<p class="ar hl3"><a href="http://www.wearepartyanimals.org/everything-ever-posted/" class="more"><?php _e('SEE MORE ARTICLES IN THE ARCHIVE',woothemes); ?></a></p>
    
    <p><a href="http://www.children.org?RS_ID=55">
<img style="border-style: initial; border-color: initial; border-width: 0px;" src="http://video.children.org/Banners/Banner600x160.jpg" alt="Click here to help a child" width="550" border="0" /></a></p>
    <p>&nbsp;</p>
    <p>
    <center><img src="<?php bloginfo('template_directory') ?>/images/randomphotostitle.png" />
	<?php nggDisplayRandomImages(12,80,60);?></center></p>
	
</div><!--/box-->