<?php include("../../parts/header.php"); ?>
<?php $link = "#world-13";?>
<style>
.god--1 {
	top: 30%;
	left: 50%;
	width: 30%;
	height: 30%;
}
.thing--1 {
	top: 30%;
	left: 50%;
	width: 30%;
	height: 30%;
}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
		</svg>
		<div class="object--circle god god--1"><div class="object-text">一者</div></div>
		<div class="thing--1 thing"><div class="object-text c-black">万物</div></div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">流出説<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">プロティノス(250-270)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">最初に完全なる一者（一なるもの。ト・ヘン）があって、そこから万物が流出する。</span></p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
$(function(){
	anime({
		targets: '.thing--1',
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
		easing: 'spring'
	});
	setTimeout(function(){
		$('.single-diagram__content__text__1').addClass('is-animation-text');
	}, 2000);
});
	//JavaScript
	// function linkUrlA() {
	// 	location.href = '/history/5.php'
	// }
	// var button = $('#button-1');
	// button.click(function(){
	// 	$('.fadeout').fadeOut();
	// 	setTimeout(linkUrlA, 1500);
	// });
</script>
<?php include("../../parts/footer.php"); ?>
