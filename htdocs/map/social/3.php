<?php include("../../parts/header.php"); ?>
<?php $link = "#social-3";?>
<style type="text/css">
	.government--1 {top: 50%;left: 32%;}
	.citizen--1 {top: 50%;left: 70%;}
	.word--1 { top: 45%; left: 52%;}
	.word--2 { top: 73%; left: 50%;}
	.notion {
		position:absolute;
		width: 10%;
		height: 10%;
		border-radius: 50%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">君主制<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">ニコロ・マキャベリ（1496-1527)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<circle class="social-area" cx="314" cy="314" r="210"/>
			<g class="work-arrow d-none fadein-1">
				<line x1="272" y1="312.4" x2="372.5" y2="312.4"/>
				<polygon points="369,317.5 388,312.4 369,307.3 			"/>
				<!-- <line x1="272" y1="304.7" x2="372.5" y2="304.7"/>
				<polygon points="369,309.8 388,304.7 369,299.6 				"/>
				<line x1="388" y1="323.3" x2="287.5" y2="323.3"/>
				<polygon points="291,318.2 272,323.3 291,328.4 				"/> -->
			</g>
		</svg>
		<div class="object--circle government government--1">
			<div class="object-text">国家</div>
		</div>
		<div class="object--circle citizen citizen--1">
			<div class="object-text">人民</div>
		</div>
		<div class="word word--1 d-none fadein-1">制御</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">国家を維持するためには、場合によってその時代の道徳に反する行いをする必要がある。</span>
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
		$('.fadein-1').fadeIn(1000);
		$('.single-diagram__content__text__1').addClass('is-animation-text');
	}, 2000);
</script>
<?php include("../../parts/footer.php"); ?>
