<?php get_header(); //Load the header.php template. ?>
		
		<div id="main">

			<div id="content">
			
			<?php if (have_posts()) : ?>
			
				<?php while (have_posts()) :
					the_post(); ?>
					<article id="post-<?php the_ID(); ?>">
						<div class="page"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo clean_wp_width_height(get_the_post_thumbnail(get_the_ID(),'front-image')); ?>
							<h2 id="page"><?php the_title(); ?></h2>
						</a>
						<div class="entry"><?php the_content(); ?></div></div>
					</article>
				<?php endwhile;
			endif; ?>
			
			<div class="navigation" style="text-align:center">
				<?php posts_nav_link(' - ','Newer','Older'); ?>
			
			</div>
			
			</div><!-- content -->

<?php wp_footer(); // Load the footer.php template. ?>

		</div><!-- #main -->
		
		<div id="footer">
		
		</div><!-- #footer -->

	</div><!-- #container -->

</body>

</html>