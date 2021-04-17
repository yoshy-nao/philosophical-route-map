<?php include("../../parts/header.php"); ?>
<?php $link = "#world-15";?>
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
.notion {
	background: none;
	border: 1px dashed #222;
}
.notion--1 {
	top: 25%;
	left: 50%;
}
.notion--2 {
	top: 75%;
	left: 50%;
	background-color: #ff0;
}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">存在のアナロギア<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">トマス・アクィナス（1225-1274)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<polygon class="creation-arrow d-none fadein-1" points="315,325.2 328.9,299.8 301.1,299.8 "/>
		</svg>
		<div class="god god--1 object--circle">
			<div class="object-text--top">神</div>
		</div>
		<div class="object--circle notion notion--1">
			<div class="object-text c-black">善</div>
		</div>
		<div class="scale-box thing--1">
			<div class="scale-box__element object--square thing">
				<div class="object-text--bottom d-none fadein-2">万物</div>
			</div>
		</div>
		<div class="object--circle notion notion--2 d-none fadein-3">
			<div class="object-text c-black">善</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">世界の根本原因は神であり、万物は神の被造物である。</span><span class="single-diagram__content__text__2 animation-text">したがって、全てのものは神の本質的な部分である善の性質を持っている。</span></p>

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
			setTimeout(function(){
				$('.fadein-2').fadeIn(1000);
				setTimeout(function(){
					$('.single-diagram__content__text__2').addClass('is-animation-text');
					$('.fadein-3').fadeIn(1000);
				}, 2000);
			}, 2000);
		}, 2000);
	}, 2000);
</script>
<?php include("../../parts/footer.php"); ?>
