<?php include("../../parts/header.php"); ?>
<?php $link = "#history-5";?>
<style>
.text--1 {
	top: 45%;
	left: 30%;
}
.text--2 {
	top: 45%;
	left: 55%;
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
	<!-- タイトル -->
	<h2 class="single-diagram__title ">進化論<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">チャールズ・ダーウィン(1809-1882)</a></h2>
	<!-- タイトルここまで -->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628px" height="628px" viewBox="0 0 628 628">
			<path class="line--god len" d="M105.93,320.97c18.64,0,18.64,30.37,37.29,30.37c18.64,0,18.64-30.37,37.29-30.37c18.64,0,18.64,30.37,37.29,30.37c18.64,0,18.64-30.37,37.29-30.37c18.65,0,18.65,30.37,37.29,30.37c18.65,0,18.65-30.37,37.29-30.37c18.65,0,18.64,30.37,37.29,30.37c18.64,0,18.64-30.37,37.29-30.37c18.65,0,18.65,30.37,37.29,30.37c18.65,0,18.65-30.37,37.29-30.37c18.65,0,18.65,30.37,37.29,30.37c18.65,0,18.65-30.37,37.29-30.37c18.65,0,18.65,30.37,37.3,30.37s18.65-30.37,37.3-30.37"/>
			<circle class="point" cx="105.75" cy="322.86" r="12.59"/>
			<g class="work-arrow">
				<line x1="79.5" y1="578.4" x2="531.1" y2="578.4"/>
				<polygon points="527.2,584.1 548.5,578.4 527.2,572.6 			"/>
			</g>
		</svg>
		<div class="text text--1 d-none fadein-1">自然淘汰</div>
		<div class="text text--2 d-none fadein-2">自然淘汰</div>
		<div class="text text--3 d-none fadein-3">自然淘汰</div>
		<div class="text text--4">時間</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">種を存続させるという生存競争（自然淘汰）によって、環境にもっとも順応したものだけが残る。それによって長い時間をかけて種は変化する。</span>
		</p>
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
				}, 1000);
			}, 1000);
		}, 600);
	}, 2000);
	anime({
		targets: '.svg2',
		translateY: [ { value: -324, duration: 1000, delay: 0 }],
		easing: 'linear'
	});
</script>
<?php include("../../parts/footer.php"); ?>
