<?php
/**
 * @package Brand New Day
 * Template Name: No Sidebar
 */

get_header(); ?>

	<div id="content" class="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			
			<h2 class="page_title">
				<?php the_title(); ?>
			</h2>
			
			<div class="entry">
				
				<?php the_content('<p>' . __( 'Read the rest of this entry' , 'brand-new-day' ) . ' &raquo;</p>'); ?>
				
				<?php wp_link_pages(array('before' => '<p class="clear"><strong>' . __( 'Pages:' , 'brand-new-day' ) . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
				
			<?php edit_post_link( __( 'Edit this entry', 'brand-new-day' ), '<p class="clear">', '</p>'); ?>
			
            <?php if ( comments_open() ) comments_template(); ?>
		</div>
		<?php endwhile; endif; ?>    
    
	</div>

<?php get_footer(); ?>
