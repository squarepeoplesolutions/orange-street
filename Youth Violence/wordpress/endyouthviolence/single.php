<?php
get_header();
get_template_part('inc/template-hero');
?>

	<section>
        <div class="container large-padding single-news-info">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>


				<p class="author"><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>
				<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
				<!-- <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span> -->
				<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
				<!-- /post details -->

				<?php comments_template(); ?>

			<?php endwhile; ?>
			<?php else: ?>
				<article>
					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
				</article>
			<?php endif; ?>
		</div>
	</section>
	<section>
        <br>
        <hr>
        <br>
    </section>
<?php get_footer(); ?>
