<div class="front-video"><div class="embed-container"><?php the_content(); ?></div><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
	<h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
</a>
<a class="entry-date" href="<?php the_permalink() ?>" title="<?php the_time('H:i') ?>" rel="bookmark"><time datetime="<?php the_time('c') ?>" pubdate class="front-page-mobile-hide"><?php the_time('jS M \'y') ?></time></a></div>