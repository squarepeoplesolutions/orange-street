<?php
    /* Template Name: About Page Template */
    get_header();
    get_template_part('inc/template-hero');
?>
    <section>
        <div class="container call-out">
            <br>
            <?php
                if(get_field('top_content')){
                    echo get_field('top_content');
                }
            ?>
        </div>
    </section>
    <section class="team" style="border-top: 1px solid #53cfd7;">
        <?php
           if (have_rows('add_team_member')) {
                $i = 1;
               while (have_rows('add_team_member')) {
                   the_row();
                   $content = get_sub_field('bio');
                   $image = get_sub_field('image');

                    if($i%2 == 0){
                        echo '
                            <div class="row grey-panel">
                                <div class="container">
                                    <div class="six columns">
                                        '.$content.'
                                    </div>
                                    <div class="six columns image">
                                        <img src="'.$image.'" alt="">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                       ';
                    }else {
                        echo '
                            <div class="row">
                                <div class="container">
                                    <div class="six columns image">
                                        <img src="'.$image.'" alt="">
                                    </div>
                                    <div class="six columns">
                                        '.$content.'
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                       ';
                    }
                    $i++;
               }
           }
        ?>
    </section>
    <section style="border-bottom: 1px solid #53cfd7; border-top: 1px solid #53cfd7;">
        <div class="container call-out">
            <?php
                if(get_field('researchers_intro')){
                    echo get_field('researchers_intro');
                }
            ?>
        </div>
    </section>
    <section class="team">
        <?php
           if (have_rows('add_researcher')) {
                $j = 1;
               while (have_rows('add_researcher')) {
                   the_row();
                   $content = get_sub_field('bio');
                   $image = get_sub_field('image');

                    if($j%2 == 0){
                        echo '
                            <div class="row grey-panel">
                                <div class="container">
                                    <div class="six columns">
                                        '.$content.'
                                    </div>
                                    <div class="six columns image">
                                        <img src="'.$image.'" alt="">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                       ';
                    }else {
                        echo '
                            <div class="row">
                                <div class="container">
                                    <div class="six columns image">
                                        <img src="'.$image.'" alt="">
                                    </div>
                                    <div class="six columns">
                                        '.$content.'
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                       ';
                    }
                    $j++;
               }
           }
        ?>
    </section>
    <section style="border-top: 1px solid #53cfd7;">
        <div class="container justify">
            <?php
                if(get_field('bottom_content')){
                    echo get_field('bottom_content');
                }
            ?>
            <br>
            <br>
        </div>
    </section>
<?php get_footer(); ?>
