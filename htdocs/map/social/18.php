<?php include("../../parts/header.php"); ?>
<?php $link = "#social-18";?>
<style type="text/css">
	.citizen--1 {top: 50%;left: 32%;}
	.citizen--2 {top: 50%;left: 70%;}
	.notion--1 {top: 50%;left: 32%;}
	.text--1 { top: 45%; left: 52%;}
	.word--2 { top: 73%; left: 50%;}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">パノプティコン<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">ミシェル・フーコー（1926-1984)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<circle class="social-area" cx="314" cy="314" r="210"/>
			<g class="work-arrow d-none fadein-2">
				<line x1="280" y1="312.4" x2="372.5" y2="312.4"/>
				<polygon points="369,317.5 388,312.4 369,307.3 			"/>
				<!-- <line x1="272" y1="304.7" x2="372.5" y2="304.7"/>
				<polygon points="369,309.8 388,304.7 369,299.6 				"/>
				<line x1="388" y1="323.3" x2="287.5" y2="323.3"/>
				<polygon points="291,318.2 272,323.3 291,328.4 				"/> -->
			</g>
		</svg>
		<div class="object--circle notion notion--1 d-none fadein-1">
			<div class="object-text--bottom">権力</div>
		</div>
		<div class="object--circle citizen citizen--1">
			<div class="object-text">人民</div>
		</div>
		<div class="object--circle citizen citizen--2">
			<div class="object-text">人民</div>
		</div>
		<div class="text text--1 d-none fadein-2">監視</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">多くの人口を効率よく管理するためには、常に監視せずに済むよう、メンバーに監視されているかもしれないという意識を内面化させ、自発的に服従させることが必要である。そのために、あらゆる集団の中で、そのときどきに力関係が生み出され、それが権力関係の基盤になる。</span>
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
		setTimeout(function(){
			$('.fadein-2').fadeIn(1000);
		}, 3000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
