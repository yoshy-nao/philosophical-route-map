<?php include("../../parts/header.php"); ?>
<?php $link = "#social-11";?>
<style type="text/css">
	.citizen--1 {top: 50%;left: 50%;}
	.word--1 { top: 45%; left: 52%;}
	.word--2 { top: 73%; left: 50%;}
	.notion--1 {top: 50%; left: 50%;}
	.text--1 { top: 23%; left: 50%;}
	.text--2 { top: 35%; left: 50%;}
	.object-text--bottom {top: 108%;}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<circle class="social-area d-none fadein-3" cx="314" cy="314" r="210"/>
			<circle class="social-area d-none fadein-1" cx="314" cy="314" r="135"/>
			<g class="work-arrow  d-none fadein-4">
				<line class="st2" x1="507.9" y1="314" x2="469.6" y2="314"/>
				<polygon class="st3" points="471.9,310.7 459.6,314 471.9,317.3 				"/>
				<line class="st2" x1="120.1" y1="314" x2="158.4" y2="314"/>
				<polygon class="st3" points="156.1,317.3 168.4,314 156.1,310.7 				"/>
			</g>
		</svg>
		<div class="object--circle notion notion--1 d-none fadein-2">
			<div class="object-text--bottom">自由</div>
		</div>
		<div class="object--circle citizen citizen--1">
			<div class="object-text">人民</div>
		</div>
		<div class="text text--1  d-none fadein-3">国家</div>
		<div class="text text--2 d-none fadein-1">市民社会</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">市民社会・国家<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">フリードリヒ・ヘーゲル（1770-1831)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">まず、自由の相互承認が制度化された市民社会がある。</span>
			<span class="single-diagram__content__text__2 animation-text">そして、経済的な自由競争の激化を調停する国家がある。</span>
			<span class="single-diagram__content__text__3 animation-text">このような社会において、人民は個人の自由を保護することよりも、共同性における自由を目指すべきである。</span>
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
		$('.fadein-1').fadeIn(2000);
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.fadein-3').fadeIn(2000);
			$('.single-diagram__content__text__2').addClass('is-animation-text');
			setTimeout(function(){
				$('.fadein-4').fadeIn(2000);
				setTimeout(function(){
					$('.fadein-2').fadeIn(2000);
					$('.single-diagram__content__text__3').addClass('is-animation-text');
				}, 3000);
			}, 1000);
		}, 3000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
<!-- Generator: Adobe Illustrator 25.0.1, SVG Export Plug-In  -->
