<div class="format-image"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
	<?php echo clean_wp_width_height(get_the_post_thumbnail(get_the_ID(),'front-image')); ?>
	<h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
</a>
<time datetime="<?php the_time('c') ?>" pubdate class="front-page"><?php the_time('jS M \'y') ?></time>

<?php the_content(); ?></div>