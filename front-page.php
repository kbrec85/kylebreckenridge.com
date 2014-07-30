<?php
/**
 * The Front Page template file
 *
 * @package KyleBreckenridge.com
 * @since 0.1.0
 */

 get_header(); ?>

<main>
    <h1 class="hero"><span data-icon="S">Website Design</span><span data-icon="V">Website Development</span><span data-icon="w">Wordpress</span></h1>
    <h2>Web Design and Development Blog</h2>
    <hr />
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'archive' ); ?>
	<?php endwhile; endif; ?>
</main>

<?php get_footer();?>
