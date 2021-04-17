$(function(){
	//progress
	function progress(target){
		anime({
			targets: target,
			top: [
				{ value: '83.5%', duration: 0, delay: 0 },
				{ value: '73.2%', duration: 1000, delay: 2000 },
				{ value: '63.2%', duration: 1000, delay: 2000 },
				{ value: '53.2%', duration: 1000, delay: 2000 },
				{ value: '43.2%', duration: 1000, delay: 2000 },
				{ value: '33%', duration: 1000, delay: 2000 },
			],
			left: [
				{ value: 0, duration: 0, delay: 0 },
				{ value: '18%', duration: 1000, delay: 2000 },
				{ value: '35.5%', duration: 1000, delay: 2000 },
				{ value: '53%', duration: 1000, delay: 2000 },
				{ value: '70.5%', duration: 1000, delay: 2000 },
				{ value: '88%', duration: 1000, delay: 2000 },
			],
			easing: 'easeInOutCubic'
		});
		setTimeout(function(){
			$('.p-fadein-1').fadeIn(500);
			setTimeout(function(){
				$('.p-fadein-2').fadeIn(500);
				$('.battle--1').animate({opacity: 0.4}, 800);
				setTimeout(function(){
					$('.p-fadein-3').fadeIn(500);
					$('.battle--2').animate({opacity: 0.4}, 800);
					setTimeout(function(){
						$('.p-fadein-4').fadeIn(500);
						$('.battle--3').animate({opacity: 0.4}, 800);
						setTimeout(function(){
							$('.p-fadein-5').fadeIn(500);
							$('.battle--4').animate({opacity: 0.4}, 800);
						},3000);
					},3000);
				},3000);
			},3000);
		},3000);
	}
	progress('.p-ball');
});
