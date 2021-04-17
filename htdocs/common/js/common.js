$(function(){

	//一定時間操作がなければトップに戻る
	function backTop(){
		setTimeout(function(){
			location.href = "/";
			$.removeCookie("scrolltop");
			$.removeCookie("value");
		}, 3000)
		$('body, html').animate({ scrollTop: 0 }, { easing: 'swing', duration: 3000 });
	}
	var backLimit =	1000 * 60 * 5;
	var timerId = setTimeout(backTop, backLimit);
	$('body').on('click mousedown', function(){
		clearTimeout(timerId);
		timerId = setTimeout(backTop, backLimit);
	});

	setTimeout(function(){
		$('.side-menu__list a').each(function(){
			var $href =$(this).attr('href');
			if(location.href.match($href)) {
				$(this).addClass('current');
			} else {
				$(this).removeClass('current');
			}
		})
	},100);

	window_load();
	window.onresize = window_load;
	function window_load() {
		//個別ページ
		var windowWidth = window.innerWidth;
		var scaleValue = windowWidth / 1440;
		$('.single-diagram__box').css('transform', `scale(${scaleValue})`);
	}

	$('.len').each(function(i) {
		var $this = $(this);
		var path = this;
		var len = path.getTotalLength();
		$this.css({
			'stroke-dashoffset':len,
			'stroke-dasharray':len
		});
	});

	$('.reset-button').on('click', function(){
		location.reload();
	});

});
