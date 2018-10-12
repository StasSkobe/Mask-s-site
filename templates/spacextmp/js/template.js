$(document).ready(function() {
	
	$('.burger-icon').click(function () {
		$(this).toggleClass('burger-icon--active');
		$('.menu-list').toggleClass('navbar--active');
		$('.header').toggleClass('header--open');
		return false;
	});
});