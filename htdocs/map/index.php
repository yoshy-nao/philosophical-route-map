<?php include("../parts/header.php"); ?>
<div class="map-scroll">
	<div class="map-scroll__text">Scroll</div>
	<img class="map-scroll__icon blinking" src="/common/img/scroll.svg">
</div>
<div class="range-box">
	<div class="range">
		<input id='slider' type="range" name="range" min="400" max="1000" value="800">
		<label for="range" class="range__minus"><span>-</span></label>
		<label for="range" class="range__plus"><span>+</span></label>
	</div>
	<a href="/develop/htdocs#how" class="help"><img src="/common/img/help_icon.svg" class="help__icon"><span class="help__text">図の見方</span></a>
	<div class="table">
		<ul class="table__list">
			<li class="table__list__item"><span class="table__list__item__icon--world"></span><span class="table__list__item__word">世界</span></li>
			<li class="table__list__item"><span class="table__list__item__icon--history"></span><span class="table__list__item__word">歴史</span></li>
			<li class="table__list__item"><span class="table__list__item__icon--life"></span><span class="table__list__item__word">生き方</span></li>
			<li class="table__list__item"><span class="table__list__item__icon--mind"></span><span class="table__list__item__word">魂・意識</span></li>
			<li class="table__list__item"><span class="table__list__item__icon--social"></span><span class="table__list__item__word">社会</span></li>
			<li class="table__list__item"><span class="table__list__item__icon--causality"></span><span class="table__list__item__word">因果</span></li>
			<li class="table__list__item"><span class="table__list__item__icon--lang"></span><span class="table__list__item__word">言語</span></li>
			<li class="table__list__item"><span class="table__list__item__icon--perception"></span><span class="table__list__item__word">認識</span></li>
		</ul>
		<a class="table__button"><img src="/common/img/table-icon.svg"></a>
	</div>
</div>
<div class='fix-box'></div>
<div class="top-container" id="now">
	<div class="years">
		<div class="year-box"><div class="year-box__element">B.C.600</div></div>
		<div class="year-box"><div class="year-box__element">B.C.500</div></div>
		<div class="year-box"><div class="year-box__element">B.C.400</div></div>
		<div class="year-box"><div class="year-box__element">B.C.300</div></div>
		<div class="year-box"><div class="year-box__element">B.C.200</div></div>
		<div class="year-box"><div class="year-box__element">B.C.100</div></div>
		<div class="year-box"><div class="year-box__element">0</div></div>
		<div class="year-box"><div class="year-box__element">100</div></div>
		<div class="year-box"><div class="year-box__element">200</div></div>
		<div class="year-box"><div class="year-box__element">300</div></div>
		<div class="year-box"><div class="year-box__element">400</div></div>
		<div class="year-box"><div class="year-box__element">500</div></div>
		<div class="year-box"><div class="year-box__element">600</div></div>
		<div class="year-box"><div class="year-box__element">700</div></div>
		<div class="year-box"><div class="year-box__element">800</div></div>
		<div class="year-box"><div class="year-box__element">900</div></div>
		<div class="year-box"><div class="year-box__element">1000</div></div>
		<div class="year-box"><div class="year-box__element">1100</div></div>
		<div class="year-box"><div class="year-box__element">1200</div></div>
		<div class="year-box"><div class="year-box__element">1300</div></div>
		<div class="year-box"><div class="year-box__element">1400</div></div>
		<div class="year-box"><div class="year-box__element">1500</div></div>
		<div class="year-box"><div class="year-box__element">1600</div></div>
		<div class="year-box"><div class="year-box__element">1700</div></div>
		<div class="year-box"><div class="year-box__element">1800</div></div>
		<div class="year-box"><div class="year-box__element">1900</div></div>
	</div>
	<svg id="svgField" viewBox="0, 0, 2560, 30000">
			<!-- イオニア派 -->
			<rect x="900" y="100" rx="100" ry="100" width="1100" height="800" class="group-box"/>
			<!-- 多元論者 -->
			<rect x="1100" y="1500" rx="100" ry="100" width="1100" height="800" class="group-box"/>
			<!-- 三大哲学者 -->
			<rect x="300" y="1900" rx="100" ry="100" width="700" height="1300" class="group-box"/>
			<!-- ヘレニズム哲学 -->
			<rect x="1100" y="3300" rx="100" ry="100" width="1200" height="500" class="group-box"/>
			<!-- 新プラトン主義 -->
			<rect x="600" y="9590" rx="100" ry="100" width="500" height="500" class="group-box"/>
			<!-- 教父哲学 -->
			<rect x="800" y="11300" rx="100" ry="100" width="500" height="500" class="group-box"/>
			<!-- スコラ哲学 -->
			<rect x="800" y="21300" rx="100" ry="100" width="700" height="1200" class="group-box"/>
			<!-- 大陸合理主義 -->
			<rect x="650" y="25600" rx="100" ry="100" width="670" height="1900" class="group-box"/>
			<!-- イギリス経験論 -->
			<rect x="1500" y="26050" rx="100" ry="100" width="350" height="1300" class="group-box"/>
			<!-- 啓蒙主義 -->
			<rect x="1900" y="26700" rx="100" ry="100" width="500" height="750" class="group-box"/>
			<!-- ドイツ観念論 -->
			<rect x="150" y="27200" rx="100" ry="100" width="1300" height="800" class="group-box"/>
			<!-- 功利主義 -->
			<rect x="1700" y="27500" rx="100" ry="100" width="400" height="960" class="group-box"/>
			<!-- 現象学 -->
			<rect x="1240" y="28700" rx="100" ry="100" width="400" height="620" class="group-box"/>
			<!-- 実存主義 -->
			<rect x="950" y="28200" rx="100" ry="100" width="550" height="1400" class="group-box"/>
			<!-- 分析哲学 -->
			<rect x="1700" y="28850" rx="100" ry="100" width="400" height="500" class="group-box"/>
			<!-- 京都学派 -->
			<!-- <rect x="2050" y="28920" rx="100" ry="100" width="400" height="500" class="group-box"/> -->
			<!-- 構造主義 -->
			<rect x="10" y="29200" rx="100" ry="100" width="790" height="580" class="group-box"/>
			<!-- ポスト構造主義 -->
			<rect x="650" y="29550" rx="100" ry="100" width="1200" height="350" class="group-box"/>
	</svg>
</div>
<script>
$(window).on('load',function(){
	$('.top-container').css('transform', 'scale(0.8) rotate(0.001deg)');
	$('.years').css('width', 1 / 0.8 * 100 + '%');
	var lochref = window.location.href;
	if ( lochref.indexOf('index.php#') > -1 ) {
		var anchor = lochref.slice( lochref.indexOf('#') );
		var windowHeight = window.innerHeight;
		window.setTimeout(function(){
			$('body, html').animate({ scrollTop: $(anchor).get(0).offsetTop - windowHeight / 2 }, { easing: 'swing', duration: 1500 });
			$(anchor).find('a').addClass('ball-animation');
		}, 100);
	}
	var r = document.cookie.split(';');
	r.forEach(function(value) {
			var content = value.split('=');
			if(content[0].trim() == "scrolltop"){
				var scrolltop = content[1];
				$('html, body').scrollTop(scrolltop);
			}
			if(content[0].trim() == "value"){
				setTimeout(function(){
					var rangeValue = content[1];
					document.querySelector('input[type="range"]').value　=　rangeValue;
					var scale = rangeValue / 1000;
					$('.top-container').css('transform', `scale(${scale}) rotate(0.001deg)`);
					var yearsWidth = 1 / scale * 100 + '%';
					$('.years').css('width', `${yearsWidth}`);
					var b = 40 * (rangeValue / 1000);
					if(rangeValue < 500) {
						$('.event').fadeIn();
						$('.year-box__element').css('font-size', '2.2vw');
						$('.line').css('stroke-width', '10');
					} else if(rangeValue <= 700) {
						$('.event').fadeOut();
						$('.year-box__element').css('font-size', '2vw');
						$('.line').css('stroke-width', `${b}`);
					} else {
						$('.event').fadeOut();
						$('.year-box__element').css('font-size', '');
						$('.line').css('stroke-width', '');
					}
					if(rangeValue <= 700) {
						$('.concept__box').css('width', '1vw');
						$('.concept__box').css('height', '1vw');
						$('.concept__box').css('border', 'none');
						$('.concept__box').css('pointer-events', 'none');
						$('.concept__box').css('border', 'none');
						$('.line').css('opacity', '0.2');
						$('.line').css('pointer-events', 'none');
						$('.name').css('font-size', '1.6vw');
						$('.name').css('background-color', '#222');
						$('.group-name').fadeIn();
						$('.group-box').fadeIn();
						$('.sub').find('a').css('background-color', '#555');
					} else {
						$('.line').css('pointer-events', 'auto');
						$('.line').css('opacity', '');
						$('.name').css('font-size', '');
						$('.name').css('background-color', '');
						$('.concept__box').css('width', '');
						$('.concept__box').css('height', '');
						$('.concept__box').css('border', '');
						$('.concept__box').css('pointer-events', 'auto');
						$('.group-name').fadeOut();
						$('.group-box').fadeOut();
						$('.sub').find('a').css('background-color', '');
					}
				},100)
			}
	})
});
</script>
<?php include("../parts/footer.php"); ?>
