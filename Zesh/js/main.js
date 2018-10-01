var menu = {};
var services = {};

window.onload = function(){
	setElements();
};

function setElements(){
	menu.btn = document.querySelector('.menu-toggle');
	menu.menu = document.querySelector('header nav');
	menu.btn.addEventListener('click', toggleMenu, false);
	if (window.innerWidth < 768) {
		services.boxes = document.querySelectorAll('.services .columns');
		for (var i = services.boxes.length - 1; i >= 0; i--) {
			services.boxes[i].addEventListener('click', showHoverState, false);
		}
	}
	var formMsg = document.querySelector('.form_message');
	if(formMsg){
		var pos = formMsg.offsetTop;
		console.log(pos);
		// document.querySelector('.form_message').scrollIntoView();
		// document.body.offsetTop = 100 + 'px';
		window.scrollTo(0,pos);
		// window.top.scrollTo(0, pos);

	}else{
		console.log('er');
	}

	// if(document.querySelector('.services')){
	// 	var link = document.querySelector('link[rel="import"]');
	//     var content = link.import;
	//     var el = content.querySelector('.container');
	//     document.querySelector('.services').appendChild(el.cloneNode(true));
	// }
}

function showHoverState(e){
	e.target.classList.add('active');
	document.querySelector('.services .columns.active').classList.remove('active');
}

function toggleMenu(){
	menu.menu.classList.toggle('open');
}