<?php
	if (have_rows('add_image')) {
		echo '
			<section class="gallery">
			    <div class="container">
			';
				while (have_rows('add_image')) {
					the_row();
					echo '<div class="three columns" style="background-image: url('.get_sub_field('image').');"></div>';
			  	}

		echo '
			    </div>
			</section>

		';
	}
?>