<div class="format-standard">
	<a href="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 9999,9999 ), false, '' ); echo $src[0]; ?>" rel="lightbox[<?php the_ID(); ?>]">
	<?php echo clean_wp_width_height(get_the_post_thumbnail(get_the_ID(),'front-image')); ?></a>
	<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
</a>
<time datetime="<?php the_time('c') ?>" pubdate class="front-page"><?php the_time('jS M \'y') ?></time>
<div class="entry"><?php the_content(); ?></div></div>