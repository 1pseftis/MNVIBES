$(document).ready(function () {
      $("#slides").slidesjs({
        width: 1100,
        height: 366,
	   play: {
		  active: true,
		  effect: "fade",
		  interval: 7000,
		  auto: true,
		  swap: true,
		  pauseOnHover: false
		},
		navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 400
          }
        }
      });
	$('.server_circle').circleProgress({
		emptyFill: "rgba(192, 192, 187, 0)",
		reverse: false,
		startAngle: -Math.PI / 4 * 2,
		animationStartValue: 0.0,
		size: 48,
		thickness: 10,
		fill: { color: "rgba(255, 255, 255, 0)", image: "https://simpleminecraft.ru/templates/simpleminecraft/images/server_circle.png" }
	});
	$('select').niceSelect();
		$("#sidepanel_nickname").shorten({
			"showChars" : 12,              // - длина текста в символах.
			"moreText"  : "",
			"ellipsesText" : "...",
			"lessText"  : "",
		});
});