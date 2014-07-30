<?php
/**
 * The post content template file
 *
 * @package KyleBreckenridge.com
 * @since 0.1.0
 */
 ?>

<article>
	<header>
		<h1><?php the_title(); ?></h1>
		<h6 class="byline">By <a href="https://plus.google.com/+KyleBreckenridge" rel="author" itemprop="author" target="_blank"><?php the_author_meta( 'display_name' );?></a> on <time datetime="<?php the_date('Y-m-d'); ?>" itemprop="datePublished"><?php the_time(get_option('date_format')); ?></time>
            <?php if(get_the_tag_list()) {
                echo get_the_tag_list(' | <span itemprop="keywords" data-icon="T">',', ','</span>');
            }
            if(get_the_category_list()) {
                echo ' | <span itemprop="articleSection" data-icon="C">' . get_the_category_list(', ') . '</span>';
            }
            ?> | <a href="<?php the_permalink(); ?>" itemprop="url">permalink</a></h6>
	</header>
	<div role="articleBody">
        <?php the_content(); ?>
    </div>
    <footer>
        <hr />
        <div class="share">
    		Share:
    		<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" aria-hidden="true" data-icon="f" target="_blank"></a>
    		<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=kbrec85" aria-hidden="true" data-icon="t" target="_blank"></a>
    		<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" aria-hidden="true" data-icon="g" target="_blank"></a>
    		<a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());" aria-hidden="true" data-icon="p" target="_blank"></a>
    		<a href="mailto:someone@kylebreckenridge.com?subject=<?php the_title();?> - KyleBreckenridge.com&body=Check%20out%20this%20article%20I%20just%20read%20on%20kylebreckenridge.com:%20<?php echo $the_uri;?>" aria-hidden="true" data-icon="e"></a>
    	</div>
</article>
