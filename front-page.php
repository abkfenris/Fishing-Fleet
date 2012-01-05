<?php get_header(); //Load the header.php template. ?>
		
		<div id="main">

			<div id="content">
			
			<?php if (have_posts()) : ?>
			
				<?php while (have_posts()) :
					the_post(); ?>
					<article id="post-<?php the_ID(); ?>">
						<?php if(!get_post_format()) {
							get_template_part('format/front','standard');
						} else {
							get_template_part('format/front',get_post_format());
						} ?>
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