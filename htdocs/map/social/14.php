<?php include("../../parts/header.php"); ?>
<?php $link = "#social-14";?>
<style type="text/css">
	.citizen--1 {top: 120%;left: 50%; z-index: 100;}
	.text--1 { top: 58%; left: 63%;}
	.text--2 { top: 46%; left: 50%;}
	.notion--1 {
		/* width: 16%;
		height: 16%; */
		top: 74%;
		left: 50%;
		z-index: -100;
	}
	.work-arrow {
		z-index: 1000;
	}
	.world-social {
		top: 46%;
		z-index: -1000;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<g class="work-arrow d-none fadein-2">
				<line class="st1" x1="314.5" y1="415" x2="314.5" y2="323.2"/>
				<polygon class="st2" points="318.8,326.2 314.5,310 310.2,326.2 			"/>
			</g>
		</svg>
		<div class="world-social">
		</div>
		<div class="object--circle citizen citizen--1">
			<div class="object-text">人民</div>
		</div>
		<div class="object--circle notion notion--1 d-none fadein-1">
			<div class="object-text--bottom">主体性</div>
		</div>
		<div class="text text--1 d-none fadein-2">アンガージュマン</div>
		<div class="text text--2">社会</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">アンガージュマン<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">ジャン＝ポール・サルトル（1906-1995）</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">現状を変えるためには、社会や政治に積極的に参加（アンガージュマン）しなければならない。それによって、自らの手で理想の社会を作り上げていくべきである。</span>
		</p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
		setTimeout(function(){
			anime({
				targets: '.citizen--1',
				top: '74%',
				easing: 'easeInOutCubic',
				duration: 1000
			});
			setTimeout(function(){
				$('.fadein-1').fadeIn(1000);
				setTimeout(function(){
					$('.fadein-2').fadeIn(1000);
					$('.single-diagram__content__text__1').addClass('is-animation-text');
				}, 1500);
			}, 1200);
		}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
