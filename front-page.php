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
	<?php $the_query = new WP_Query(array( 'post_type' => 'post'));
    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<?php get_template_part( 'content', 'archive' ); ?>
	<?php endwhile; endif; ?>
</main>

<?php get_footer();?>
