<?php
/*
 * Template Name: Goal Events VZW
 */
get_header(); ?>
<main class="site-content">
<?php get_sidebar(); ?>

		<section class="main_content">
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     		<div><?php the_content(); ?></div>
		</section>
		  <?php endwhile; endif; ?>
	</main>



<?php get_footer(); ?>