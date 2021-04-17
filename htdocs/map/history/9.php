<?php include("../../parts/header.php"); ?>
<?php $link = "#history-9";?>
<style>
.text--1 {
	top: 80%;
	left: 35%;
}
.text--2 {
	top: 61%;
	left: 53%;
}
.text--3 {
	top: 42%;
	left: 70%;
}
.text--4 {
	top: 96%;
	left: 50%;
}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">パラダイムシフト<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">トマス・クーン(1922-1996)</a></h2>
	<!-- タイトルここまで -->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628px" height="628px" viewBox="0 0 628 628">
			<line class="line--artificial len len--1" x1="0.24" y1="474.43" x2="218" y2="474.43"/>
			<polyline class="line--artificial len len--2" points="218.18,474.6 217.82,357.55 326.82,357.22 "/>
			<polyline class="line--artificial len len--3" points="327.18,357.22 326.82,240.17 435.82,239.84 "/>
			<polyline class="line--artificial len len--4" points="436.18,239.84 435.82,122.79 629.82,122.46 "/>
			<circle class="point d-none fadein-1" cx="218" cy="475" r="8.66"/>
			<circle class="point d-none fadein-2" cx="328" cy="357" r="8.66"/>
			<circle class="point d-none fadein-3" cx="436" cy="240" r="8.66"/>
			<g class="work-arrow">
				<line x1="79.5" y1="578.4" x2="531.1" y2="578.4"/>
				<polygon points="527.2,584.1 548.5,578.4 527.2,572.6 			"/>
			</g>
		</svg>
		<div class="text text--1 d-none fadein-1">パラダイムシフト</div>
		<div class="text text--2 d-none fadein-2">パラダイムシフト</div>
		<div class="text text--3 d-none fadein-3">パラダイムシフト</div>
		<div class="text text--4">時間</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">時代の変化は連続的ではなく、むしろ断続的なものである。ひとつの時代の枠組みをパラダイムといい、これが新しい発見などによって転換されること（パラダイムシフト）によって、科学は進歩してきた。</span>
		</p>
	</div>
	<!-- テキストここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
	$(function(){
		setTimeout(function(){
			$('.len--1').addClass('line-effect--1');
			$('.single-diagram__content__text__1').addClass('is-animation-text');
			setTimeout(function(){
				$('.fadein-1').fadeIn();
				$('.len--2').addClass('line-effect--1');
				setTimeout(function(){
					$('.fadein-2').fadeIn();
					$('.len--3').addClass('line-effect--1');
					setTimeout(function(){
						$('.fadein-3').fadeIn();
						$('.len--4').addClass('line-effect--1');
					},2000);
				},2000);
			},2000);
		},1200);
	})
</script>
<?php include("../../parts/footer.php"); ?>
