<?php include("../../parts/header.php"); ?>
<?php $link = "#world-11";?>
<style>
.god {
	transition: all 1s;
	top: 20%;
	left: 50%;
	width: 18%;
	height: 18%;
}
.god--world {
	top: 50%;
	left: 50%;
	width: 60%;
	height: 60%;
}
.thing--1 {
	width: 25%;
	height: 25%;
	top: 50%;
	left: 50%;
}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">神のロゴス<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">ゼノン（BC335-263)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
		</svg>
		<div class="object--circle god--world"><div class="object-text--bottom">ロゴス</div></div>
		<div class="object--circle god"><div class="object-text">神</div></div>
		<div class="scale-box thing--1">
			<div class="scale-box__element object--square thing">
				<div class="object-text c-black">万物</div>
			</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">この世界は神の意思であるロゴス（摂理・理性）によって創造されたものである。そして、世界は一つのロゴスによって秩序づけられている。万物はこのロゴスを通じて共感しあい、同調することで共生している。</span></p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
$(function(){
	setTimeout(function(){
		$('.scale-box__element').css('transform', 'scale(1)');
		$('.single-diagram__content__text__1').addClass('is-animation-text');
	}, 1500);
});
</script>
<?php include("../../parts/footer.php"); ?>
