<?php
	if(get_field('hero_image')){ ?>
		<div class="hero" style="background-image: url('<?php echo get_field('hero_image')?>');">
		    <div class="hero-inner">
		        <div class="captions <?php if(get_field('captions_position') == 'center'){echo 'default';} ?>">
		            <?php
		            	if(get_field('hero_headline')){
		            		echo '<h1>'.get_field('hero_headline').'</h1>';
		             	}
		            ?>
		            <?php
		            	if(get_field('hero_sub_heading')){
		            		echo '<p>'.get_field('hero_sub_heading').'</p>';
		             	}
		            ?>
		        </div>
		    </div>
		</div>
<?php } ?>