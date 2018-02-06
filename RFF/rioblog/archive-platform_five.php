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
	                    	if(have_posts()){
                    			$count_posts = wp_count_posts('platform_five');
								$remaining_posts = $count_posts->publish;
								$overflow_posts = $remaining_posts % 5;
								// echo '<p>'.$overflow_posts.'</p>';
                    		}
	                    	echo '
	                    		<div class="row">';

                    				while ( have_posts() ) : the_post();
                    					$thumburl = get_the_post_thumbnail_url();

                    					if($remaining_posts == $overflow_posts){
                    						echo '</div>';
                    						echo '
                    							<div class="grid-item end-item">
			                    					<div class="inner" style="background-image: url('.$thumburl.');">
			                    						<div class="inner-inner">
			                    							<a class="button" href="'. esc_url( get_permalink() ).'">Play</a>
							                                <p>'.esc_html( get_the_title() ).'</p>
			                    						</div>
			                    					</div>
			                    				</div>
			                    			';
                    					}else if($remaining_posts == 1){
                    						// echo '<p>last overflows</p>';
                    						echo '
                    							<div class="grid-item end-item">
			                    					<div class="inner" style="background-image: url('.$thumburl.');">
			                    						<div class="inner-inner">
			                    							<a class="button" href="'. esc_url( get_permalink() ).'">Play</a>
							                                <p>'.esc_html( get_the_title() ).'</p>
			                    						</div>
			                    					</div>
			                    				</div>
			                    			';
			                    			echo '</div>';
                    					}else if($remaining_posts < $overflow_posts){
                    						echo '
                    							<div class="grid-item end-item">
			                    					<div class="inner" style="background-image: url('.$thumburl.');">
			                    						<div class="inner-inner">
			                    							<a class="button" href="'. esc_url( get_permalink() ).'">Play</a>
							                                <p>'.esc_html( get_the_title() ).'</p>
			                    						</div>
			                    					</div>
			                    				</div>
			                    			';
                    					}else {
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
                    					}

                    				if($i == 10){
                    					$i = 1;
                    				}else {
                    					$i++;
                    				}

                    				$remaining_posts--;

                    				endwhile;

                    				echo '
                    			</div>
                    		';
						?>
	                </div>
	            </div>
	        </section>
		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
