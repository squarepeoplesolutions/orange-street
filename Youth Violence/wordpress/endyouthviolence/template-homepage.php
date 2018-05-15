<?php
/* Template Name: Home Page Template */
get_header();
get_template_part('inc/template-hero');
?>
	<!-- <div class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Image---Home-Page.jpg');">
        <div class="hero-inner">
            <div class="captions">
                <h1>The Youth Violence Commission</h1>
                <p>Developing policy to address youth violence</p>
            </div>
        </div>
    </div> -->
    <section>
        <div class="container call-out justify">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php
                if (have_rows('add_a_button')) {
                    $i = 1;
                    echo '<div class="row text-center call-out-buttons">';
                    while (have_rows('add_a_button')) {
                        the_row();
                        $title = get_sub_field('button_title');
                        $link = get_sub_field('button_link');
                        if($title && $link){
                           echo '<a href="'.$link.'" class="six columns button">'.$title.'</a>';
                        }
                        if($i % 2 == 0){
                            echo '</div><div class="row text-center call-out-buttons">';
                        }
                        $i++;
                    }
                    echo '</div>';
                }
            ?>
        </div>
    </section>
<?php get_footer(); ?>
