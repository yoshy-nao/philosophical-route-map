<?php include("../../parts/header.php"); ?>
<?php $link = "#perception-8";?>
<style>
.god--1 {
	top: 30%;
	left: 50%;
	width: 30%;
	height: 30%;
	/* z-index: 100; */
}
.thing--1 {
	background-color: #FFFF00;
	top: 30%;
	left: 50%;
	width: 25%;
	height: 25%;
}
.ego--1 {
	background-color: #FFFF00;
	top: 30%;
	left: 50%;
	width: 25%;
	height: 25%;
}
.text--1 {
	top: 60%;
	left: 50%;
}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">同一哲学<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">フリードリヒ・シェリング（1775-1854）</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg id ="svg" width="628" height="628" viewBox="0 0 628 628">
			<line class="connect-line connect-line--l d-none fadein-1" x1="188.7" y1="409" x2="441.2" y2="409"/>
		</svg>
		<div class="object--circle god god--1"><div class="object-text">絶対同一者</div></div>
		<div class="thing--1 thing"><div class="object-text--bottom d-none fadein-1">客観</div></div>
		<div class="ego--1 ego object--circle"><div class="object-text--bottom d-none fadein-1">主観</div></div>
		<div class="text text--1 d-none fadein-1">同一</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">主体（精神）と客体（自然）はもともと絶対的同一者から生まれた。</span>
			<span class="single-diagram__content__text__2 animation-text">そして、精神と世界は、その絶対者の異なった現れに過ぎず、分離させることはできない。</span>
		</p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
$(function(){
	$('.single-diagram__content__text__1').addClass('is-animation-text');
	anime({
		targets: '.thing--1',
		translateX: [
			{ value: '-50%', duration: 0, delay: 0 }
		],
		translateY: [
			{ value: '90%', duration: 3000, delay: 2200 }
		],
		scale: [
			{ value: 0, duration: 0, delay: 0 },
			{ value: 1, duration: 1500, delay: 2200 }
		],
		rotate: [
			{ value: 0, duration: 0, delay: 0 },
			{ value: 360, duration: 3000, delay: 2200 }
		],
		left: [
			{ value: '70%', duration: 3000, delay: 2200 }
		],
		background: [
			{ value: '#78C1BD', duration: 3000, delay: 2500 }
		],
		easing: 'spring'
	});
	anime({
		targets: '.ego--1',
		translateX: [
			{ value: '-50%', duration: 0, delay: 0 }
		],
		translateY: [
			{ value: '90%', duration: 3000, delay: 2000 }
		],
		scale: [
			{ value: 0, duration: 0, delay: 0 },
			{ value: 1, duration: 1500, delay: 2000 }
		],
		rotate: [
			{ value: 0, duration: 0, delay: 0 },
			{ value: 360, duration: 3000, delay: 2000 }
		],
		left: [
			{ value: '30%', duration: 3000, delay: 2000 }
		],
		background: [
			{ value: '#EA60BC', duration: 3000, delay: 2500 }
		],
		easing: 'spring'
	});
	setTimeout(function(){
		$('.single-diagram__content__text__2').addClass('is-animation-text');
		$('.fadein-1').fadeIn();
	}, 3000);
});
</script>
<?php include("../../parts/footer.php"); ?>
