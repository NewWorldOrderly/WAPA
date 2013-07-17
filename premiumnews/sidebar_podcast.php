<div class="col2">

	<?php include('ads/ads-management.php'); ?><a href="http://www.wearepartyanimals.org/category/podcasts/"><img src="<?php bloginfo('template_directory'); ?>/images/subscribetopodcast.png" border="0" /></a>    
    <div class="podcast">
    <table id="Table_01" width="325" height="66" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<img src="http://www.wearepartyanimals.org/wp-content/themes/premiumnews/images/podcast_01.png" width="196" height="66" alt=""></td>
		<td><a href="http://itunes.apple.com/us/podcast/wapa-we-are-party-animals/id493880365 " target="_blank"><img src="http://www.wearepartyanimals.org/wp-content/themes/premiumnews/images/podcast_02.png" alt="" width="65" height="66" border="0"></a></td>
		<td><a href="http://www.wearepartyanimals.org/feed/podcast" target="_blank"><img src="http://www.wearepartyanimals.org/wp-content/themes/premiumnews/images/podcast_03.png" alt="" width="60" height="64" border="0"></a></td>
	</tr>
</table>
   <iframe src="http://www.ustream.tv/embed/9470741" width="330" height="212" scrolling="no" frameborder="0" style="border: 0px none transparent;"></iframe>
</div>

    <div class="ads">
      <p><br />
        <strong>EMAIL: </strong>podcast[at]wearepartyanimals.org<br />
      <strong>CALL: </strong>(323) 963-4823      </p>
      <p>&nbsp;</p>
      <p>
        <object type="application/x-shockwave-flash" data="https://clients4.google.com/voice/embed/webCallButton" width="230" height="85">
    <param name="movie" value="https://clients4.google.com/voice/embed/webCallButton" /><param name="wmode" value="transparent" /><param name="FlashVars" value="id=2210bd00bfc71165fd65c95648e56172bbced171&style=0" />
  </object>
      </p>
      <p>&nbsp;</p>
  </div>

	<div class="podcastlist">
<?php query_posts('category_name=podcasts&showposts=500'); ?>
<?php while (have_posts()) : the_post(); ?>
        <li><a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
          </a>  </li>
        <?php endwhile; ?>
    </div>
    


	<div class="fix"></div>
		
</div><!--/col2-->
