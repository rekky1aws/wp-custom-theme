<?php 
get_header();
if ( have_posts() ): 
?>
	<div class="articles-display">
	<?php
	while ( have_posts() ):
		the_post();
		?>
		<article>
			<a class="article-title-container" href="<?php echo get_permalink(); ?>">
				<h3 class="article-title"> <?php the_title() ?> </h3>
			</a>
			<?php
			if ( has_post_thumbnail() ):
			the_post_thumbnail( 'medium' );
			endif;
			?>
			<?php the_content(); ?>
			<div class="article-footer">
				<div class="article-date"> <?php the_time( get_option( 'date_format' ) ); ?> </div>		
			</div>
		</article>
	<?php endwhile;	?>
	</div>
<?php 
endif; 
get_footer();
?>