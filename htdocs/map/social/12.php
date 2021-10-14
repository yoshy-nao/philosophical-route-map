<?php include("../../parts/header.php"); ?>
<?php $link = "#social-12";?>
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
			<circle class="social-area" cx="314" cy="314" r="210"/>
		</svg>
		<div class="object--circle notion notion--1 d-none fadein-1">
			<div class="object-text--bottom">自由</div>
		</div>
		<div class="object--circle citizen citizen--1">
			<div class="object-text">人民</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">質的功利主義<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">ジョン・シュチュアート・ミル（1806-1873)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">「満足した豚よりも、不満足な人間である方がいい」人間にふさわしい、質の高い快楽を追求を肯定する。</span>
			<span class="single-diagram__content__text__2 animation-text">そして、人間にとって自由こそが必要不可欠なものであるとし、社会はあらゆる個人に幸福を追求する自由を保障しなければならないとした。</span></p>

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
			$('.fadein-1').fadeIn(1000);
			$('.single-diagram__content__text__2').addClass('is-animation-text');
		}, 3000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
<!-- Generator: Adobe Illustrator 25.0.1, SVG Export Plug-In  -->
