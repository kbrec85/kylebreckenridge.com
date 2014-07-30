<?php
/**
 * The content template file
 *
 * @package KyleBreckenridge.com
 * @since 0.1.0
 */
 ?>

<article>
	<header>
		<h1><?php the_title(); ?></h1>
	</header>
	<div role="articleBody">
        <?php the_content(); ?>
    </div>
</article>
