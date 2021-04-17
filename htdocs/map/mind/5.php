<?php include("../../parts/header.php"); ?>
<?php $link = "#mind-5";?>
<style>
	.ego--1 {
		top: 44%;
		left: 50%;
		opacity: 0.7;
	}
	.ego--2 {
		top: 56%;
		left: 42%;
		opacity: 0.7;
	}
	.ego--3 {
		top: 56%;
		left: 58%;
		opacity: 0.7;
	}
	.scale-box__element {
		border-radius: 50%;
	}
	.thing--1 {
		top: 50%;
		left: 75%;
		width: 28%;
		height: 28%;
	}
	.text--1 {
		top: 45%;
		left: 49%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">知覚の束<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">デイヴィット・ヒューム（1711-1776)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<g class="work-arrow d-none fadein-1">
			</g>
		</svg>
		<div class="object--circle ego--1 scale-box">
			<div class="ego scale-box__element scale-box__element--1">
			</div>
		</div>
		<div class="object--circle ego--2 scale-box">
			<div class="ego scale-box__element scale-box__element--2">
			</div>
		</div>
		<div class="object--circle ego--3 scale-box">
			<div class="ego scale-box__element scale-box__element--3">
			</div>
		</div>
		<div class="object-text d-none fadein-1">知覚の束</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">人間は「暑い」「痛い」といった感覚が集まった「知覚の束」に過ぎない。そしてその知覚の中身は刻々と変化していくため、意識というものは実体はない物である。</span></p>

	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
	setTimeout(function(){
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		anime({
		  targets: '.scale-box__element--1',
			scale: [
			{ value: 0, duration: 500, delay: 1000 },
			{ value: 1, duration: 500, delay: 1000 },],
		  easing: 'easeOutExpo',
			duration: 1500,
			loop: true
		});
		setTimeout(function(){
			anime({
			  targets: '.scale-box__element--2',
				scale: [
				{ value: 0, duration: 500, delay: 1000 },
				{ value: 1.3, duration: 500, delay: 1000 },],
			  easing: 'easeOutExpo',
				duration: 1500,
				loop: true
			});
			setTimeout(function(){
				anime({
				  targets: '.scale-box__element--3',
					scale: [
					{ value: 0, duration: 500, delay: 1000 },
					{ value: 0.7, duration: 500, delay: 1000 },],
				  easing: 'easeOutExpo',
					duration: 1500,
					loop: true
				});
				setTimeout (function(){
					$('.fadein-1').fadeIn(1000);
				}, 1500)
			}, 1000);
		}, 1000);
	}, 2000);
</script>
<?php include("../../parts/footer.php"); ?>
