<?php include("../../parts/header.php"); ?>
<?php $link = "#world-19";?>
<style>
.notion--1 {
	top: 70%;
	left: 50%;
	width: 30%;
	height: 30%;
}
.thing--1 {
	top: 70%;
	left: 50%;
	width: 30%;
	height: 30%;
}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg id ="svg" width="628" height="628" viewBox="0 0 628 628">
		</svg>
		<div class="object--circle notion notion--1"><div class="object-text">絶対無</div></div>
		<div class="thing--1 thing"><div class="object-text c-black">万物</div></div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">絶対無<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">西田幾多郎(1870-1945)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">すべての根底には絶対無の場所がある。そして、すべてのものは絶対無によって生み出される。</span></p>

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
			{ value: '-190%', duration: 3000, delay: 2000 }
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
