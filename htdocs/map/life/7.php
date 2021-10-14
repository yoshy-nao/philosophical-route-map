<?php include("../../parts/header.php"); ?>
<?php $link = "#life-7";?>
<style type="text/css">
	.ego--1 {
		top: 70%;
		left: 50%;
		width: 15%;
		height: 15%;
	}
	.negative--1 {
		top: 70%;
		left: 50%;
		width: 22%;
		height: 22%;
		z-index: -1000;
	}
	.god--1 {
		top: 25%;
		left: 50%;
	}
	.object-text--bottom {
		top: 108%;
	}
	.text--1 {
		top: 49%;
		left: 56%;
	}
	.text--2 {
		top: 49%;
		left: 44%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg class="object-svg" width="628" height="628" viewBox="0 0 628 628">
			<g class="work-arrow d-none fadein-1">
				<line class="st1" x1="323.7" y1="380" x2="323.7" y2="250.6"/>
				<polygon class="st2" points="328.5,253.8 323.7,236 318.9,253.8 			"/>
			</g>
			<g class="work-arrow d-none fadein-2">
				<line class="st1" x1="304.3" y1="236" x2="304.3" y2="365.4"/>
				<polygon class="st2" points="299.5,362.2 304.3,380 309.1,362.2 			"/>
			</g>
		</svg>
		<div class="object--circle negative negative--1 fadeout-1">
			<div class="object-text--bottom">原罪</div>
		</div>
		<div class="object--circle ego ego--1">
			<div class="object-text">自分</div>
		</div>
		<div class="object--circle god god--1">
			<div class="object-text">神</div>
		</div>
		<div class="text text--1 d-none fadein-1">信仰</div>
		<div class="text text--2 d-none fadein-2">救済</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">神の恩寵<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">アウレリウス・アウグスティヌス（354-430)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">
				神の恩寵なくして、人間は善を意志することはできない。そのため、原罪を負う人間は神への信仰でしか救われない。
			</span>
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
	$('.single-diagram__content__text__1').addClass('is-animation-text');
	setTimeout(function(){
		$('.fadein-2').fadeIn(1000);
		setTimeout(function(){
			$('.fadeout-1').fadeOut(2000);
		}, 1000);
	}, 2000);
}, 1000);
</script>
