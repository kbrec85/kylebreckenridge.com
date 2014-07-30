<?php
/**
 * The Archive template file
 *
 * @package KyleBreckenridge.com
 * @since 0.1.0
 */

 get_header(); ?>

<main>
    <h1 class="archive-title"><?php
		if ( is_day() ) :
			printf( __( 'Daily Archives: %s', 'kylebreckenridge.com' ), get_the_date() );
		elseif ( is_month() ) :
			printf( __( 'Monthly Archives: %s', 'kylebreckenridge.com' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'kylebreckenridge.com' ) ) );
		elseif ( is_year() ) :
			printf( __( 'Yearly Archives: %s', 'kylebreckenridge.com' ), get_the_date( _x( 'Y', 'yearly archives date format', 'kylebreckenridge.com' ) ) );
		elseif ( is_category() ) :
            printf( __( 'Category Archives: %s', 'kylebreckenridge.com' ), single_cat_title( '', false ) );
        elseif ( is_tag() ) :
            printf( __( 'Tag Archives: %s', 'kylebreckenridge.com' ), single_tag_title( '', false ) );
        else :
			_e( 'Archives', 'kylebreckenridge.com' );
		endif;
	?></h1>
    <hr />
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'archive' ); ?>
	<?php endwhile; endif; ?>
</main>

<?php get_footer();?>
