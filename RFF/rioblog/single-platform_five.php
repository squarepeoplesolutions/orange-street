<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rioblog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
	    <div class="menu-toggle">
	        <div class="inner"></div>
	        <div class="inner"></div>
	        <div class="inner"></div>
	    </div>
	    <nav>
	        <ul>
	            <li><a href="../../index.html">Home</a></li>
	            <li><a href="../../about.html">About</a></li>
	            <li><a href="../../programmes.html">Programmes</a></li>
	            <li><a href="/news/" class="selected">News</a></li>
	            <li><a href="../../contact.php">Contact</a></li>
	        </ul>
	    </nav>
	</header>
	<section class="hero">
	    <div class="hero-inner">
	        <video class="" id="" autoplay="autoplay" loop="loop" muted="muted" playsinline>
	            <source src="../../video/football_comp.mp4" type="video/mp4">
	            <source src="../../video/football_comp.webm" type="video/webm">
	        </video>
	    </div>
	</section>
	<section class="section indent-top">
	    <div class="container">
	        <a href="index.html"><img src="../../img/RFF-logo-black.png" alt="" id="logo"></a>
	    </div>
	</section>
	<hr>
	<section class="section call-out">
        <div class="container">
            <br>
            <?php
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;
			?>
        </div>
    </section>
    <section>
        <div class="container">
            <p style="text-align: center;">
            	<?php echo get_field('code'); ?>
                <!-- <iframe width="560" height="315" src="http://google.co.uk" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe> -->
            </p>
        </div>
    </section>
    <?php get_template_part('template-parts/gallery'); ?>

		<div class="social">
		    <a href="https://www.facebook.com/RioFoundation"><img src="../../img/facebook_logo.png" alt=""></a>
		    <a href="https://twitter.com/riofoundation"><img src="../../img/twitter_logo.png" alt=""></a>
		    <a href="https://www.instagram.com/rioferdinandfoundation/"><img src="../../img/instagram_logo.png" alt=""></a>
		    <a href="https://www.snapchat.com/add/riofoundation"><img src="../../img/snapchat_logo.png" alt=""></a>
		</div>
        <div class="indent-bottom">
            <div class="container">
                <hr>
            </div>
        </div>
        <!-- PAGE CONTENT END -->
        <footer>&copy; Copyright Rio Ferdinand Foundation</footer>
        <div class="popup">
            <button class="close-popup">X</button>
            <div class="popup-inner">
                <img src="" alt="">
            </div>
        </div>
    </body>
    <!-- <script>
    	var menu = {};
		var grid = null;
		var msnry;
		var galleryImages;

		window.onload = function(){
			setElements();
		};

		function setElements(){
			menu.btn = document.querySelector('.menu-toggle');
			menu.menu = document.querySelector('header nav');
			menu.btn.addEventListener('click', toggleMenu, false);
			grid = document.querySelector('.grid');
			if (grid && window.innerWidth > 767){
				prepareMasonry();
			}

			gallery = document.querySelector('.gallery');
			if(gallery){
				gallery.addEventListener('click', lightboxImg, false);
				if(document.querySelector('.close-popup')){
					document.querySelector('.close-popup').addEventListener('click', closePopup, false);
				}

			}

			if(document.querySelector('.reveal-more')){
				document.querySelector('.reveal-more').addEventListener('click', showHiddenNews, false);
			}
		}

		function showHiddenNews(){
			var hiddens = document.querySelectorAll('.hidden');
			document.querySelector('.reveal-more').style.display = 'none';
			for (var i = hiddens.length - 1; i >= 0; i--) {
				hiddens[i].classList.remove('hidden');
			}
		}

		function closePopup(){
			document.querySelector('.popup').style.display = 'none';
			document.querySelector('.popup').style.opacity = 0;
		}

		function lightboxImg(e){
			if (e.target.classList.contains('columns')) {
				document.querySelector('.popup img').src = e.target.style.backgroundImage.slice(4, -1).replace(/"/g, "");
				document.querySelector('.popup').style.display = 'block';
				document.querySelector('.popup').style.opacity = 1;
			}
		}

		function prepareMasonry(){
			imagesLoaded( grid, function() {
			    msnry = new Masonry( grid, {
			        itemSelector: '.grid-item',
			        columnWidth: '.grid-sizer',
			        percentPosition: true
			    });
			});
		}

		function toggleMenu(){
			menu.menu.classList.toggle('open');
		}
    </script> -->
</html>
