<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rioblog
 */
?>
<div class="four-cols post" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
    <?php
	    echo '<a href="' . esc_url( get_permalink() ) . '">';
    ?>
        <img src="../img/lake.jpg">
        <div class="post-inner">
        	<?php
				the_title( '<p>','</p>' );
			?>
        </div>
    </a>
</div>
