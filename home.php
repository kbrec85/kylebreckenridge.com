<?php
/**
 * The Home template file
 *
 * @package KyleBreckenridge.com
 * @since 0.1.0
 */

 get_header(); ?>

<main>
    <h1 class="archive-title">Web Design and Development Blog</h1>
    <hr />
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'archive' ); ?>
	<?php endwhile; endif; ?>
</main>

<?php get_footer();?>
