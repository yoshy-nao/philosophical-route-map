<?php include("../../parts/header.php"); ?>
<?php $link = "#world-14";?>
<style>
.world--1 {
	top: 30%;
	left: 50%;
	width: 45%;
	height:45%;
}
.world--2 {
	top: 70%;
	left: 50%;
	width: 45%;
	height: 45%;
}
.god--1 {
	top: 30%;
	left: 50%;
}
.thing--1 {
	top: 70%;
	left: 50%;
	width: 18%;
	height: 18%;
}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">神の国・地上の国<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">アウグスティヌス（354-430)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg id ="svg" width="628" height="628" viewBox="0 0 628 628">
		</svg>
		<div class="scale-box world--2 fadeout-1">
			<div class="scale-box__element object--circle real-world">
				<div class="object-text--bottom d-none fadein-1 fadeout-1">地上の国</div>
			</div>
		</div>
		<div class="scale-box world--1">
			<div class="scale-box__element object--circle god--world">
				<div class="object-text--top d-none fadein-1 fadeout-1">神の国</div>
				<div class="object-text fadein-2">神の国</div>
			</div>
		</div>
		<div class="scale-box thing--1">
			<div class="scale-box__element object--square thing">
				<div class="object-text c-black">万物</div>
			</div>
		</div>
		<div class="object--circle god god--1">
			<div class="object-text">神</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">神を愛し自分を蔑む愛と自分を愛し神を蔑む愛という２つの神の愛によって、神の国と地上の国を作られた。</span><span class="single-diagram__content__text__2 animation-text">そして、地上の国が神への愛に目覚め、神への愛に基づいた正義と平和を実現すれば、そのまま神の国になりうる可能性を秘めている。</span></p>

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
		$('.world--2').css('transform', 'translate(-50%, -50%) scale(1)');
		$('.scale-box__element').css('transform', 'scale(1)');
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.fadein-1').fadeIn(2000);
			setTimeout(function(){
				anime({
					targets: '.world--1',
					top: '50%',
					easing: 'easeOutQuint',
					width: '72%',
					height: '72%',
					duration: 2000
				});
				anime({
					targets: '.world--2',
					top: '50%',
					width: '72%',
					height: '72%',
					easing: 'easeOutQuint',
					duration: 2000
				});
				$('.fadein-2').fadeIn(2000);
				$('.fadeout-1').fadeOut(1500);
				$('.single-diagram__content__text__2').addClass('is-animation-text');
			}, 3000);
		}, 1000);
	}, 2000);
});
</script>
<?php include("../../parts/footer.php"); ?>
