<?php
/**
 * The Single Post template file
 *
 * @package KyleBreckenridge.com
 * @since 0.1.0
 */

 get_header(); ?>

<main>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'single' ); ?>
	<?php endwhile; endif; ?>
    <footer class="wrapper">
        <?php comments_template(); ?>
    </footer>
</main>

<?php get_footer();?>
