<div class="front-standard">
<?php /* Check to see if the post has a thumbnail before giving fancy formatting */
	if(has_post_thumbnail()) { ?>
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo clean_wp_width_height(get_the_post_thumbnail(get_the_ID(),'front-thumb')); ?></a>

		<div class="image-overlay">
			<h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
			<a class="entry-date" href="<?php the_permalink() ?>" title="<?php the_time('H:i') ?>" rel="bookmark"><time datetime="<?php the_time('c') ?>" pubdate class="front-page-mobile-hide"><?php the_time('jS M \'y') ?></time></a>
		</div>
	<?php } else { ?>
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo clean_wp_width_height(get_the_post_thumbnail(get_the_ID(),'front-thumb')); ?></a>

		<h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
		<a class="entry-date" href="<?php the_permalink() ?>" title="<?php the_time('H:i') ?>" rel="bookmark"><time datetime="<?php the_time('c') ?>" pubdate class="front-page-mobile-hide"><?php the_time('jS M \'y') ?></time></a>
	<?php } ?>

</div>
