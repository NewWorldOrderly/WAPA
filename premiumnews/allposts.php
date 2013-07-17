<?php
/*
Template Name: All posts
*/
?>

<?php get_header(); ?>

		<div class="col1">

		<?php if (have_posts()) : ?>
		
		<div id="archivebox"> 
		
		</div><!--/archivebox-->

				<div class="post-alt blog" id="post-<?php the_ID(); ?>">
		
					<div class="entry">
                        <?php
$debut = 0; //The first article to be displayed
?>
<?php while(have_posts()) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<ul>
<?php
$myposts = get_posts('numberposts=-1&offset=$debut');
foreach($myposts as $post) :
?>
<div class="box">
		<div class="post <?php if ($counter == 1) { echo 'fl'; } else { echo 'fr'; $counter = 0; } ?>">
		
			<?php woo_image('height=57&width=100&class=th'); ?>
		
			<h2><?php the_category(', ') ?></h2>
			<h3><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<p class="posted"><?php _e('Posted on',woothemes); ?> <?php the_time('d F Y'); ?></p>
			<p><?php echo strip_tags(get_the_excerpt(), '<a><strong>'); ?> <span class="continue"><a title="<?php _e('Permanent Link to',woothemes); ?> <?php the_title(); ?>" href="<?php the_permalink() ?>"><?php _e('Continue Reading',woothemes); ?></a></span></p>
			<p class="comments"><?php comments_popup_link(__('Comments (0)',woothemes), __('Comments (1)',woothemes), __('Comments (%)',woothemes)); ?></p>
			
		</div><!--/post-->
        </div>
<?php endforeach; ?>
</ul>
<?php endwhile; ?>
					</div>
				
				</div><!--/post-->
	
		<?php endif; ?>							

		</div><!--/col1-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
