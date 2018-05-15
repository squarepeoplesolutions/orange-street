<?php
/* Template Name: Reports Page Template */
get_header();
get_template_part('inc/template-hero');
?>

	<!-- <div class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thomas-martinsen-2443.jpg');">
        <div class="hero-inner">
            <div class="captions">
                <h1>Literature &amp; Reports</h1>
            </div>
        </div>
    </div> -->
    <section class="reports med-grey-panel">
        <div class="container call-out text-center large-padding">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <br>
            <br>
            <br>
            <?php
                if (have_rows('upload_file')) {
                    $i = 1;
                    echo '<div class="row">';
                    while (have_rows('upload_file')) {
                        the_row();
                        $file = get_sub_field('file');
                        $thumbnail = get_sub_field('thumbnail');
                        $title = get_sub_field('title');
                        $date = get_sub_field('date');
                        if($file && $title){
                            echo '
                                <a href="'.$file.'" class="four columns" target="_blank">
                                    <img src="'.$thumbnail.'" width="400">
                                    <p>'.$title.'</p>
                                    <p class="date">'.$date.'</p>
                                </a>
                            ';
                        }
                        if($i % 3 == 0){
                            echo '</div><div class="row">';
                        }
                        $i++;
                    }
                    echo '</div>';
                }
            ?>
        </div>
    </section>
    <br>
    <br>
    <?php echo do_shortcode('[ninja_form id=3]');?>

<?php get_footer(); ?>
