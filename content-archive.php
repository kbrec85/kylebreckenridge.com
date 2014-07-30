<?php
/**
 * The archive content template file
 *
 * @package KyleBreckenridge.com
 * @since 0.1.0
 */
 ?>

<article class="col2">
	<?php if(has_post_thumbnail()){the_post_thumbnail('featured');}?>
	<header>
		<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
	</header>
	<?php the_excerpt(); ?>
</article>
