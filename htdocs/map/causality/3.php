<?php include("../../parts/header.php"); ?>
<?php $link = "#causality-3";?>
<style>
	.notion--1 {
		top: 50%;
		left: 30%;
	}
	.notion--2 {
		top: 50%;
		left: 70%;
	}
	.scale-box__element {
		border-radius: 50%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">因果律批判<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">デイヴィッド・ヒューム（1711-1776)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
		</svg>
		<div class="arrow"></div>
		<div class="object--circle notion--1 scale-box">
			<div class="notion scale-box__element">
				<div class="object-text">事象</div>
			</div>
		</div>
		<div class="object--circle notion--2 scale-box">
			<div class="notion scale-box__element">
				<div class="object-text">事象</div>
			</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">因果律は経験による思い込みであって、自然界には存在しない。これは科学の根底を揺るがすような指摘だった。</span>
		</p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
	setTimeout(function(){
		$('.notion--1').find('.scale-box__element').css('transform', 'scale(1)');
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.notion--2').find('.scale-box__element').css('transform', 'scale(1)');
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
<!-- Generator: Adobe Illustrator 25.0.1, SVG Export Plug-In  -->
