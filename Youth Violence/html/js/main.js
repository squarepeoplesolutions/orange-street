var menu = {};
var grid = null;
var altGrid = null;
var msnry;
var team_members = null;
var teamInfoOpen = false;

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
	altGrid = document.querySelector('.alternating-grid');
	if (altGrid && window.innerWidth > 767){
		prepareAltGrid();
	}

	team_members = document.querySelector('.team');
	if(team_members){
		team_members.addEventListener('click', showTeamInfo, false);
	}

	if(document.querySelector('.standout-boxes') && window.innerWidth > 767){
		var boxes = document.querySelectorAll('.standout-boxes .columns');
		var highest = 0;
		for (var i = boxes.length - 1; i >= 0; i--) {
			if (boxes[i].clientHeight > highest) {
				highest = boxes[i].clientHeight;
			}
		}

		for (var j = boxes.length - 1; j >= 0; j--) {
			boxes[j].style.height = highest + 'px';
		}
	}

	var equalheights = document.querySelectorAll('.equalheights .columns');

	if(equalheights && window.innerWidth > 1024){

		var highest = 0;
		console.log(equalheights.length);

		for (var i = equalheights.length - 1; i >= 0; i--) {
			var height = equalheights[i].clientHeight;
			if (height > highest) {
				highest = height;
			}
		}

		for (var i = equalheights.length - 1; i >= 0; i--) {
			equalheights[i].style.height = highest + 'px';
		}
	}

	if(document.querySelector('.timeline')){
		document.addEventListener('scroll', checkTimelinePosition, false);
		checkTimelinePosition();
	}

	if (document.querySelector('.printme')){
		document.querySelector('.printme').addEventListener('click', function(e){
			e.preventDefault();
			var url = this.href;
			var myWindow = window.open(url);
			myWindow.print();
		}, false);
	}
}

function showTeamInfo(e){
	if (e.target.classList.contains('info') && !teamInfoOpen){
		if(document.querySelector('.active-team')){
			document.querySelector('.active-team').classList.remove('active-team');
		}
		e.target.classList.add('active-team');
		e.target.classList.add('top-team');
		teamInfoOpen = true;
	}else if(e.target.parentElement.classList.contains('info') && !teamInfoOpen){
		if(document.querySelector('.active-team')){
			document.querySelector('.active-team').classList.remove('active-team');
		}
		e.target.parentElement.classList.add('active-team');
		e.target.parentElement.classList.add('top-team');
		teamInfoOpen = true;
	}else if(e.target.parentElement.parentElement.classList.contains('info') && !teamInfoOpen){
		if(document.querySelector('.active-team')){
			document.querySelector('.active-team').classList.remove('active-team');
		}
		e.target.parentElement.parentElement.classList.add('active-team');
		e.target.parentElement.parentElement.classList.add('top-team');
		teamInfoOpen = true;
	}else if(e.target.classList.contains('close-team') && teamInfoOpen){
		if(document.querySelector('.active-team')){
			document.querySelector('.active-team').classList.remove('active-team');
		}
		setTimeout(function(){
			teamInfoOpen = false;
			document.querySelector('.top-team').classList.remove('top-team');
		}, 1100);
	}
}

function checkTimelinePosition(){

	var timelines = document.querySelectorAll('.timeline-entry');
	console.log(isElementInViewportFull(timelines[0]));


	for (var i = timelines.length - 1; i >= 0; i--) {
		if(isElementInViewport(timelines[i])){
			timelines[i].classList.add('active');
		}
	}
}

function animateStat(el, total) {
	var newTimer = setInterval(function(){
		if(parseInt(el.innerText) < total){
			el.innerText = parseInt(el.innerText) + 1;
		}else {
			clearInterval(newTimer);
		}
	}, 100);
}

function isElementInViewportFull(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
        rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
    );
}

function isElementInViewport (el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.top + 200 <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
        rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
    );
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

function prepareAltGrid(){
	var highest = 0;
	var cols = altGrid.querySelectorAll('.columns');

	for (var j = cols.length - 1; j >= 0; j--) {
		if(cols[j].offsetHeight > highest){
			highest = cols[j].offsetHeight;
		}
	}

	for (var i = cols.length - 1; i >= 0; i--) {
		cols[i].style.height = highest + 'px';
	}
}

function toggleMenu(){
	menu.menu.classList.toggle('open');
}