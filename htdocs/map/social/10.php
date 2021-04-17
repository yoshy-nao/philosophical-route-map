<?php include("../../parts/header.php"); ?>
<?php $link = "#social-10";?>
<style type="text/css">
	.citizen--1 {top: 50%;left: 50%;}
	.notion--1 {width: 51%; height: 51%; top: 50%; left: 50%;}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">最大多数の最大幸福<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">ジェレミ・ベンサム（1748-1832)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<circle class="social-area" cx="314" cy="314" r="210"/>
		</svg>
		<div class="object--circle notion notion--1 d-none fadein-1">
			<div class="object-text--bottom">最大幸福</div>
		</div>
		<div class="object--circle citizen citizen--1">
			<div class="object-text">人民</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">人間は誰しも快楽を求めて苦痛を避ける。快楽の増大に役立つことが善であり、苦痛をもたらすことが悪である。</span>
			<span class="single-diagram__content__text__2 animation-text">その上で、快楽の度合いを量的に計算し、各個人の幸福度の合計を最大にするべきである。</span>
		</p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
	//JavaScript
	// function linkUrlA() {
	// 	location.href = '/history/5.php'
	// }
	// var button = $('#button-1');
	// button.click(function(){
	// 	$('.fadeout').fadeOut();
	// 	setTimeout(linkUrlA, 1500);
	// });
	setTimeout(function(){
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.single-diagram__content__text__2').addClass('is-animation-text');
			$('.fadein-1').fadeIn(1000);
		}, 3000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
<!-- Generator: Adobe Illustrator 25.0.1, SVG Export Plug-In  -->
