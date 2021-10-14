<?php include("../../parts/header.php"); ?>
<?php $link = "#world-12";?>
<style>
.god--1 {
	top: 25%;
	left: 50%;
	width: 30%;
	height: 30%;
}
.thing--1 {
	top: 75%;
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
			<polygon class="creation-arrow d-none fadein-1" points="315,325.2 328.9,299.8 301.1,299.8 "/>
		</svg>
		<div class="god god--1 object--circle"><div class="object-text c-black">神</div></div>
		<div class="scale-box thing--1">
			<div class="scale-box__element object--square thing">
				<div class="object-text c-black">万物</div>
			</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">天地創造<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">キリスト教</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">万物は神の無償の愛によって無から生み出された。</span></p>

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
			$('.scale-box__element').css('transform', 'scale(1)');
		}, 2000)
	}, 2000);
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
