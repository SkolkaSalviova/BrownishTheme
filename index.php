<?php
/**
 * @package Brand New Day
 */

get_header();

?>

	<div id="content" class="content">
		<?php
			if ( is_search() ) {
				echo "<h2 class='page_title'>" . __( 'You searched for' , 'brand-new-day' ) . " <em>" . get_search_query() . "</em></h2>";
				get_search_form();
				echo "<hr />";
			}
		?>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2 class="page_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to' , 'brand-new-day' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="post-date">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to' , 'brand-new-day' ) ?> <?php the_title_attribute(); ?>">
						<span class="post-month"><?php the_date(); ?></span>
					</a>
				</div>

				<div class="entry">
					<?php the_content( __( 'Read the rest of this entry' , 'brand-new-day' ) . ' &raquo;'); ?>
				</div>
				<div class="edit-link"><?php edit_post_link( __( 'Edit', 'brand-new-day' ), '', ''); ?></div>
				
				<?php wp_link_pages(array('before' => '<p class="clear"><strong>' . __( 'Pages:' , 'brand-new-day' ) . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

				<hr />
			</div>

		<?php endwhile; ?>
		
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo;' . __( 'Older Entries' , 'brand-new-day' ) ) ?></div>
			<div class="alignright"><?php previous_posts_link( __( 'Newer Entries' , 'brand-new-day' ) . ' &raquo;') ?></div>
		</div>
		
	<?php else : ?>

		<h2 class="page_title"><?php _e( 'Not Found' , 'brand-new-day' ) ?></h2>
		<p class="aligncenter"><?php _e( 'Sorry, no posts matched your criteria.', 'brand-new-day' ) ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_sidebar('menu'); ?>


<?php get_footer(); ?>
