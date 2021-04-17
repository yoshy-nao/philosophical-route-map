<?php include("../../parts/header.php"); ?>
<?php $link = "#mind-8";?>
<style>
	.ego--1 {
		top: 50%;
		left: 50%;
		width: 20%;
		height: 20%;
	}
	.scale-box__element {
		border-radius: 50%;
	}
	.ego--world {
		top: 50%;
		left: 50%;
		width: 60%;
		height: 60%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">無意識<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">ジークムント・フロイト(1856-1939)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<g class="creation-arrow d-none fadein-1">
				<polygon class="st1" points="423.5,315 439.5,323 439.5,307 	"/>
				<polygon class="st1" points="204.5,312.6 188.5,304.5 188.5,320.6 	"/>
				<polygon class="st1" points="312.8,423.3 304.8,439.3 320.8,439.3 	"/>
				<polygon class="st1" points="315.2,204.3 323.2,188.3 307.2,188.3 	"/>
			</g>
		</svg>
		<div class="object--circle ego--1 scale-box">
			<div class="ego scale-box__element">
				<div class="object-text">意識</div>
			</div>
		</div>
		<div class="object--circle ego--world">
			<div class="object-text--bottom">無意識</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">個人を動かしているのは脳の意識している領域ではなく、無意識の領域である。そして、その無意識を動かしている力はリビトー（欲望）であり、これは性的衝動を発動させる力である。つまり、人間の無意識の裏側には、様々な性的な動機が働いている。</span></p>

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
		}, 1500);
	}, 1500);
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
