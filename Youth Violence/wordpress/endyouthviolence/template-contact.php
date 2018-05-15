<?php
/* Template Name: Contact Page Template */
get_header();
get_template_part('inc/template-hero');
?>
    <section class="contact">
        <div class="container call-out">
            <br>
            <br>
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_content(); ?>
                    <?php comments_template( '', true ); // Remove if you don't want comments ?>
                </article>
            <?php endwhile; ?>
            <?php else: ?>
                <article>
                    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
                </article>
            <?php endif; ?>
        </div>
    </section>
<?php get_footer(); ?>
