<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rioblog
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<h1>Platform 5</h1>
		<?php
		if ( have_posts() ) :
			?>
			<section class="section">
	            <div class="container">
	                <div class="grid">
	                    <?php
	                    	$i = 1;
	                    	echo '
	                    		<div class="row">';
                    				while ( have_posts() ) : the_post();
                    					// $thumburl = the_post_thumbnail_url();
                    					$thumburl = get_the_post_thumbnail_url();

                    					if($i == 1){
                    						echo '
                    							<div class="grid-tall">
	                    							<div class="grid-item">
				                    					<div class="inner" style="background-image: url('.$thumburl.');">
				                    						<div class="inner-inner">
				                    							<a class="button" href="'. esc_url( get_permalink() ).'">Play</a>
								                                <p>'.esc_html( get_the_title() ).'</p>
				                    						</div>
				                    					</div>
				                    				</div>
                    						';
                    					}else if($i == 2){
                    						echo '
	                    							<div class="grid-item">
				                    					<div class="inner" style="background-image: url('.$thumburl.');">
				                    						<div class="inner-inner">
				                    							<a class="button" href="'. esc_url( get_permalink() ).'">Play</a>
								                                <p>'.esc_html( get_the_title() ).'</p>
				                    						</div>
				                    					</div>
				                    				</div>
				                    			</div>
                    						';
                    					}else if($i == 3){
                    						echo '
                    							<div class="grid-wide">
                    								<div class="grid-item">
				                    					<div class="inner" style="background-image: url('.$thumburl.');">
				                    						<div class="inner-inner">
				                    							<a class="button" href="'. esc_url( get_permalink() ).'">Play</a>
								                                <p>'.esc_html( get_the_title() ).'</p>
				                    						</div>
				                    					</div>
				                    				</div>
                    						';
                    					}else if($i == 4){
                    						echo '
	                    							<div class="grid-item">
				                    					<div class="inner" style="background-image: url('.$thumburl.');">
				                    						<div class="inner-inner">
				                    							<a class="button" href="'. esc_url( get_permalink() ).'">Play</a>
								                                <p>'.esc_html( get_the_title() ).'</p>
				                    						</div>
				                    					</div>
				                    				</div>
                    						';
                    					}else if($i == 5){
                    						echo '
                    								<div class="grid-item">
				                    					<div class="inner" style="background-image: url('.$thumburl.');">
				                    						<div class="inner-inner">
				                    							<a class="button" href="'. esc_url( get_permalink() ).'">Play</a>
								                                <p>'.esc_html( get_the_title() ).'</p>
				                    						</div>
				                    					</div>
				                    				</div>
				                    			</div>
				                </div>
                    						';
                    					}else if ($i == 6){
                    						echo '
        						<div class="row">
        										<div class="grid-wide">
                    								<div class="grid-item">
				                    					<div class="inner" style="background-image: url('.$thumburl.');">
				                    						<div class="inner-inner">
				                    							<a class="button" href="'. esc_url( get_permalink() ).'">Play</a>
								                                <p>'.esc_html( get_the_title() ).'</p>
				                    						</div>
				                    					</div>
				                    				</div>
                    						';
                    					}else if($i == 7){
                    						echo '
	                    							<div class="grid-item">
				                    					<div class="inner" style="background-image: url('.$thumburl.');">
				                    						<div class="inner-inner">
				                    							<a class="button" href="'. esc_url( get_permalink() ).'">Play</a>
								                                <p>'.esc_html( get_the_title() ).'</p>
				                    						</div>
				                    					</div>
				                    				</div>
                    						';
                    					}else if($i == 8){
                    						echo '
                    								<div class="grid-item">
				                    					<div class="inner" style="background-image: url('.$thumburl.');">
				                    						<div class="inner-inner">
				                    							<a class="button" href="'. esc_url( get_permalink() ).'">Play</a>
								                                <p>'.esc_html( get_the_title() ).'</p>
				                    						</div>
				                    					</div>
				                    				</div>
				                    			</div>
                    						';
                    					}if($i == 9){
                    						echo '
                    							<div class="grid-tall">
	                    							<div class="grid-item">
				                    					<div class="inner" style="background-image: url('.$thumburl.');">
				                    						<div class="inner-inner">
				                    							<a class="button" href="'. esc_url( get_permalink() ).'">Play</a>
								                                <p>'.esc_html( get_the_title() ).'</p>
				                    						</div>
				                    					</div>
				                    				</div>
                    						';
                    					}else if($i == 10){
                    						echo '
	                    							<div class="grid-item">
				                    					<div class="inner" style="background-image: url('.$thumburl.');">
				                    						<div class="inner-inner">
				                    							<a class="button" href="'. esc_url( get_permalink() ).'">Play</a>
								                                <p>'.esc_html( get_the_title() ).'</p>
				                    						</div>
				                    					</div>
				                    				</div>
				                    			</div>
                    						';
                    					}


                    				if($i == 10){
                    					$i = 1;
                    				}else {
                    					$i++;
                    				}

                    				endwhile;

                    				echo '
                    			</div>
                    				';
						?>
									<!-- <div class="" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
				                        <div class="inner">
				                            <div class="inner-inner">
				                                <a class="button" href="<?php echo  esc_url( get_permalink() ); ?>">Play</a>
				                                <p><?php the_title( '<p>','</p>' ); ?></p>
				                            </div>
				                        </div>
				                    </div> -->
	                </div>
	            </div>
	        </section>
		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
