<?php
/*
Template Name: List of Posts
*/
?>

<?php
$args=array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  echo 'List of Posts';
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
    <?php
  the_excerpt();
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>