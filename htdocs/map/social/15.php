<?php include("../../parts/header.php"); ?>
<?php $link = "#social-15";?>
<style type="text/css">
	.citizen--1 {top: 63%;left: 65%;}
	.citizen--2 {top: 63%;left: 35%;}
	.text--1 { top: 59.5%; left: 50%;}
	.notion--1 {
		width: 16%;
		height: 16%;
		top: 32%;
		left: 50%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<circle class="social-area" cx="314" cy="314" r="210"/>
			<g class="work-arrow d-none fadein-4">
				<line class="st1" x1="324.9" y1="266.1" x2="324.9" y2="336.9"/>
				<polygon class="st2" points="320.6,333.9 324.9,350.1 329.3,333.9 			"/>
				<line class="st1" x1="302.3" y1="350.1" x2="302.3" y2="279.3"/>
				<polygon class="st2" points="306.6,282.3 302.3,266.1 297.9,282.3 			"/>
			</g>
			<g class="work-arrow d-none fadein-2">
				<line class="st1" x1="272" y1="395.7" x2="342.8" y2="395.7"/>
				<polygon class="st2" points="339.9,400 356,395.7 339.9,391.4 			"/>
			</g>
		</svg>
		<div class="object--circle citizen citizen--2">
			<div class="object-text">人民</div>
		</div>
		<div class="object--circle citizen citizen--1 d-none fadein-1">
			<div class="object-text">人民</div>
		</div>
		<div class="object--circle notion notion--1 d-none fadein-4">
			<div class="object-text">正義</div>
		</div>
		<div class="text text--1 d-none fadein-3">慈愛</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">他者論<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">エマニュエル・レヴィナス（1906-1996)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">他者の顔が目の前に現れるとき、絶対に助けなければならないという倫理的な責任を感じさせる対象になる。こうした他者性に基づく倫理を慈愛と呼ぶ。</span>
			<span class="single-diagram__content__text__2 animation-text">そして、対等性に基づく正義とのバランスを強調した。</span>
		</p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
		setTimeout(function(){
			$('.fadein-1').fadeIn(1000);
			setTimeout(function(){
				$('.fadein-2').fadeIn(1000);
				setTimeout(function(){
					$('.fadein-3').fadeIn(1000);
					$('.single-diagram__content__text__1').addClass('is-animation-text');
					setTimeout(function(){
						$('.fadein-4').fadeIn(1000);
						$('.single-diagram__content__text__2').addClass('is-animation-text');
					}, 3000);
				}, 1000);
			}, 1000);
		}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
