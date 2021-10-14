<?php include("../../parts/header.php"); ?>
<?php $link = "#history-4";?>
<style>
.text--1 {
	top: 45%;
	left: 20%;
}
.text--2 {
	top: 45%;
	left: 50%;
}
.text--3 {
	top: 45%;
	left: 80%;
}
.text--4 {
	top: 96%;
	left: 50%;
}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628px" height="628px" viewBox="0 0 628 628">
			<path class="line--artificial len" d="M0,321c22.6,0,22.6,30.4,45.2,30.4c22.6,0,22.6-30.4,45.2-30.4c22.6,0,22.6,30.4,45.2,30.4
				c22.6,0,22.6-30.4,45.2-30.4c22.6,0,22.6,30.4,45.2,30.4c22.6,0,22.6-30.4,45.2-30.4c22.6,0,22.6,30.4,45.2,30.4
				c22.6,0,22.6-30.4,45.2-30.4c22.6,0,22.6,30.4,45.2,30.4c22.6,0,22.6-30.4,45.2-30.4c22.6,0,22.6,30.4,45.2,30.4
				c22.6,0,22.6-30.4,45.2-30.4c22.6,0,22.6,30.4,45.2,30.4S610.4,321,633,321"/>
			<g class="work-arrow">
				<line x1="79.5" y1="578.4" x2="531.1" y2="578.4"/>
				<polygon points="527.2,584.1 548.5,578.4 527.2,572.6 			"/>
			</g>
		</svg>
		<div class="text text--1 d-none fadein-1">変化</div>
		<div class="text text--2 d-none fadein-2">変化</div>
		<div class="text text--3 d-none fadein-3">変化</div>
		<div class="text text--4">時間</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">ペシミズム<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">アルトゥル・ショーペンハウアー(1788-1860)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">歴史は進歩しているのではなく、変化しているに過ぎない。盲目的な意志による争いは永遠に続き、個人の苦しみは消えることはない（ペシミズム）。</span></p>
	</div>
	<!-- テキストここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
setTimeout(function(){
	$('.len').addClass('line-effect--5');
	$('.single-diagram__content__text__1').addClass('is-animation-text');
	setTimeout(function(){
		$('.fadein-1').fadeIn();
		setTimeout(function(){
			$('.fadein-2').fadeIn();
			setTimeout(function(){
				$('.fadein-3').fadeIn();
			}, 1200);
		}, 1200);
	}, 600);
}, 2000);
</script>
<?php include("../../parts/footer.php"); ?>
