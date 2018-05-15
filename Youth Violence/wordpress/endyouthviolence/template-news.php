<?php
/* Template Name: News Page Template */
get_header();
?>
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

	<!-- <div class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/jon-tyson-195064.jpg');">
        <div class="hero-inner">
            <div class="captions default">

            </div>
        </div>
    </div> -->

    <section class="text-center">
        <div class="container call-out text-center large-padding">
            <p>Indicative Findings (Add as are available from Evidence Sessions):</p>
        </div>
    </section>

    <section class="posts">
        <div class="row">
            <a class="four columns" href="grime_and_knife_crime.html">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/thumb_1.jpg" alt="">
                </div>
                <p class="category">News</p>
                <p class="title">Grime and Knife Crime: My Vision for the Commission</p>
                <p class="meta">24st March 2017 <span>/</span> 3 Comments</p>
            </a>
            <a class="four columns" href="#">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ritzy.jpg" alt="">
                </div>
                <p class="category">News</p>
                <p class="title">Zoë Leadley-Meade: The Violence Virus</p>
                <p class="meta">8th March 2017 <span>/</span> 3 Comments</p>
            </a>
            <a class="four columns" href="#">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/jon-tyson-195064.jpg" alt="">
                </div>
                <p class="category">News</p>
                <p class="title">John Sutherland: Addicted to Violence</p>
                <p class="meta">20th January 2017 <span>/</span> 3 Comments</p>
            </a>
        </div>
        <!-- <hr> -->
        <div class="row">
            <a class="four columns" href="#">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sophie_linden.jpg" alt="">
                </div>
                <p class="category">News</p>
                <p class="title">Sophie Linden: Towards a Knife Crime Strategy for London</p>
                <p class="meta">19th December 2016 <span>/</span> 3 Comments</p>
            </a>
            <a class="four columns" href="#">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/jon-tyson-195064.jpg" alt="">
                </div>
                <p class="category">News</p>
                <p class="title">Greg Mulholland MP: Why I'm involved</p>
                <p class="meta">12th December 2016 <span>/</span> 3 Comments</p>
            </a>
            <a class="four columns" href="#">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/jon-tyson-195064.jpg" alt="">
                </div>
                <p class="category">News</p>
                <p class="title">Leroy Logan: Debating Gangland</p>
                <p class="meta">7th November 2016 <span>/</span> 3 Comments</p>
            </a>
        </div>
        <div class="row">
            <a class="four columns" href="#">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/jon-tyson-195064.jpg" alt="">
                </div>
                <p class="category">News</p>
                <p class="title">Mark Field MP: Why I'm Involved</p>
                <p class="meta">1st July 2016 <span>/</span> 3 Comments</p>
            </a>
            <a class="four columns" href="#">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/jon-tyson-195064.jpg" alt="">
                </div>
                <p class="category">News</p>
                <p class="title">The Violence Debate</p>
                <p class="meta">22nd June 2016 <span>/</span> 3 Comments</p>
            </a>
            <!-- <a class="four columns" href="#">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/jon-tyson-195064.jpg" alt="">
                </div>
                <p class="category">News</p>
                <p class="title"></p>
                <p class="meta"> 2017 <span>/</span> 3 Comments</p>
            </a> -->
        </div>
    </section>

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
