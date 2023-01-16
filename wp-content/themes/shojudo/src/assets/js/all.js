$(window).on("load scroll", function () {
	$(".c-anim-up").each(function () {
		var winScroll = $(window).scrollTop();
		var winHeight = $(window).height();
		var scrollPos = winScroll + winHeight * 0.9;
		if ($(this).offset().top < scrollPos) {
			$(this).addClass("move");
		}
	});

	var t = $(this).scrollTop();
	if (t > 100) {
		$("header").addClass("scroll");
	} else {
		$("header").removeClass("scroll");
	}
});

$("#header_menu").click(function () {
	$("header").toggleClass("isOpen");
	$("footer").toggleClass("isOpen");
	$(".logo").toggleClass("isOpen");
	$(this).find(".line").toggleClass("show");
});

$('a[href^="#"]').on("click", function (e) {
	e.preventDefault();

	var targetEle = this.hash;
	var $targetEle = $(targetEle);

	$("html, body")
		.stop()
		.animate(
			{
				scrollTop: $targetEle.offset().top,
			},
			800,
			"swing",
			function () {
				window.location.hash = targetEle;
			}
		);
});

$(".boxes .box--wrapper .box--container a .box--desc").matchHeight();

var swiper = new Swiper(".banner--swiper", {
	loop: true,
	slidesPerView: 1,
	centeredSlides: true,
	autoplay: {
		delay: 3000,
	},
	breakpoints: {
		1000: {
			slidesPerView: 1.3,
		},
	},
});
(function ($, window) {
	var adjustAnchor = function () {
		var $anchor = $(":target"),
			fixedElementHeight = 140;

		if ($anchor.length > 0) {
			$("html, body")
				.stop()
				.animate(
					{
						scrollTop: $anchor.offset().top - fixedElementHeight,
					},
					200
				);
		}
	};

	$(window).on("hashchange load", function () {
		adjustAnchor();
	});
})(jQuery, window);
var swiper = new Swiper(".banner--swiper2", {
	loop: true,
	slidesPerView: 1,
	centeredSlides: false,
	// autoplay: false,
	autoplay: {
		delay: 3000,
	},
	breakpoints: {
		1000: {
			slidesPerView: 2.83,
		},
	},

	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
});
(function ($, window) {
	var adjustAnchor = function () {
		var $anchor = $(":target"),
			fixedElementHeight = 140;

		if ($anchor.length > 0) {
			$("html, body")
				.stop()
				.animate(
					{
						scrollTop: $anchor.offset().top - fixedElementHeight,
					},
					200
				);
		}
	};

	$(window).on("hashchange load", function () {
		adjustAnchor();
	});
})(jQuery, window);
