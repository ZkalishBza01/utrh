$(document).ready(function(){

	$('.clicked').click(function() {
		$("#navbarSupportedContent").removeClass("show");
		$("#navbarSupportedContent").removeClass("in");
	});

	$('body').scrollspy({
		target: '#menu',
		offset: 100
	});

	var navbarCollapse = function() {
		if ($("#menu").offset().top > 45) {
		  $("#menu").addClass("bg_custom");
		} else {
		  $("#menu").removeClass("bg_custom");
		}
	};

	navbarCollapse();
	$(window).scroll(navbarCollapse);

});

/* ---------------------------------------------DESPLAZAMIENTO DENTRO DE LA MISMA PAGINA----------------------------------------------------- */
$('.inicio').click(() => {
	setTimeout(() => {
		$('html, body').animate({
			scrollTop: 0
		}, 1000, "easeInOutExpo");
	}, 30);
});

$('.nosotros').click(() => {
	setTimeout(() => {
		$('html, body').animate({
			scrollTop: $("#nosotros").offset().top - 54
		}, 1000, "easeInOutExpo");
	}, 30);
});

$('.servicios').click(() => {
	setTimeout(() => {
		$('html, body').animate({
			scrollTop: $("#servicios").offset().top - 54
		}, 1000, "easeInOutExpo");
	}, 30);
});

$('.herramientas').click(() => {
	setTimeout(() => {
		$('html, body').animate({
			scrollTop: $("#herramientas").offset().top - 54
		}, 1000, "easeInOutExpo");
	}, 30);
});

$('.contacto').click(() => {
	setTimeout(() => {
		$('html, body').animate({
			scrollTop: $("#contacto").offset().top - 54
		}, 1000, "easeInOutExpo");
	}, 30);
});

$('.sucursales').click(function () {
	setTimeout(() => {
		$('html, body').animate({
			scrollTop: $("#sucursales").offset().top - 54
		}, 1000, "easeInOutExpo");
	}, 30);
});