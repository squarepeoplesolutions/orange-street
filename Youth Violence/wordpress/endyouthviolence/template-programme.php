<?php
/* Template Name: Programme Page Template */
get_header();
get_template_part('inc/template-hero');
?>
    <section>
        <h2 class="text-center">Our programme timeline</h2>
        <br>
        <br>
        <?php
            if (have_rows('timeline_entry')) {
                echo '<div class="container timeline">';
                while (have_rows('timeline_entry')) {
                    the_row();
                    $head = get_sub_field('header');
                    $body = get_sub_field('body');
                    if($head && $body){
                       echo '
                        <div class="timeline-entry">
                            <div class="inner">
                                <div class="head">
                                    <p>'.$head.'</p>
                                </div>
                                <div class="body">
                                    <p>'.$body.'</p>
                                </div>
                            </div>
                        </div>
                       ';
                    }
                }
                echo '<div class="timeline-line"></div></div>';
            }
        ?>
    </section>
    <div class="container">
        <br>
        <br>
        <?php
            if(get_field('content')){
                echo get_field('content');
            }
        ?>
    </div>
    <br>
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
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
