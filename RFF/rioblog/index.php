<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rioblog
 */

get_header(); ?>

	<section class="news-boxes news-page">
        <div class="container">
            <div>
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
					<?php
					endif;
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_format() );
					endwhile;
					// the_posts_navigation();
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif; ?>
				<button class="reveal-more">Show more</button>
			</div>
		</div>
	</section>

<?php
get_footer();
