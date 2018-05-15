<?php get_header(); ?>
	<!-- <div class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/roman-kraft-260082.jpg');">
        <div class="hero-inner">
            <div class="captions default">
                <h1>News &amp; Updates</h1>
            </div>
        </div>
    </div> -->
    <?php
        if(get_field('hero_image', get_option('page_for_posts'))){ ?>
            <div class="hero" style="background-image: url('<?php echo get_field('hero_image', get_option('page_for_posts'))?>');">
                <div class="hero-inner">
                    <div class="captions <?php if(get_field('captions_position', get_option('page_for_posts')) == 'center'){echo 'default';} ?>">
                        <?php
                            if(get_field('hero_headline', get_option('page_for_posts'))){
                                echo '<h1>'.get_field('hero_headline', get_option('page_for_posts')).'</h1>';
                            }
                        ?>
                        <?php
                            if(get_field('hero_sub_heading', get_option('page_for_posts'))){
                                echo '<p>'.get_field('hero_sub_heading', get_option('page_for_posts')).'</p>';
                            }
                        ?>
                    </div>
                </div>
            </div>
    <?php } ?>
    <section class="text-center">
        <div class="container call-out text-center">
            <!-- <h2>Indicative Findings</h2> -->
            <br>
            <br>
        </div>
    </section>
	<section class="posts equalheights">
        <div class="row">
	        <?php $i = 0; ?>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<a class="four columns" href="<?php the_permalink(); ?>">
                    <div class="image">
                        <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
							<?php the_post_thumbnail('full'); // Declare pixel size you need inside the array ?>
						<?php endif; ?>
                    </div>
                    <p class="category">News</p>
                    <p class="title"><?php the_title(); ?></p>
                    <p class="meta">
                        <?php echo get_the_time('F j, Y'); ?> <?php echo get_the_time('g:i a'); ?>
                        <span>/</span>
                        <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?>
                    </p>
                </a>
                <?php $i++;
	                if($i % 3 == 0){
	                	echo '</div><div class="row">';
	                }
	            ?>
			<?php endwhile; ?>
			<?php else: ?>
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
			<?php endif; ?>
        </div>
        <div class="container">
            <?php get_template_part('pagination'); ?>
            <br>
            <br>
        </div>
    </section>
<?php get_footer(); ?>