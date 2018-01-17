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
	// grid = document.querySelector('.grid');
	// if (grid && window.innerWidth > 767){
	// 	prepareMasonry();
	// }

	gallery = document.querySelector('.gallery');
	if(gallery){
		gallery.addEventListener('click', lightboxImg, false);
		document.querySelector('.close-popup').addEventListener('click', closePopup, false);
	}

	var moreBtn = document.querySelector('.reveal-more');
	if(moreBtn) {
		moreBtn.addEventListener('click', showHiddenNews, false);
	}
}

function showHiddenNews(){
	var hiddens = document.querySelectorAll('.four-cols');
	document.querySelector('.reveal-more').style.display = 'none';
	for (var i = hiddens.length - 1; i >= 0; i--) {
		hiddens[i].style.display = 'block';
		// hiddens[i].classList.remove('hidden');
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
	console.log('prepareMasonry');

	imagesLoaded( grid, function() {
	    msnry = new Masonry( grid, {
	        itemSelector: '.grid-item',
	        columnWidth: '.grid-sizer',
	        percentPosition: true,
	        gutter: 2
	    });
	});
}

function toggleMenu(){
	menu.menu.classList.toggle('open');
}