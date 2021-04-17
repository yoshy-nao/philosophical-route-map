<?php include("../../parts/header.php"); ?>
<?php $link = "#lang-5";?>
<style>
	.lang--1 {
		top: 50%;
		left: 30%;
		width: 22%;
		height: 22%;
	}
	.notion--1 {
		top: 50%;
		left: 70%;
		width: 22%;
		height: 22%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">写像理論<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">ルートヴィヒ・ウィトゲンシュタイン（1889-1951）</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<line class="connect-line connect-line--l d-none fadein-2" x1="225.7" y1="314.2" x2="500.7" y2="314.2"/>
		</svg>
		<div class="object--circle notion--lang lang--1 d-none fadein-1">
			<div class="object-text">科学的言語</div>
		</div>
		<div class="notion object--circle notion--1"><div class="object-text">事柄</div></div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">世界には「事柄」と「その事柄を表す言語」が1対1で存在しており、科学的な言語（〜は〜であるという文）は事柄と同じ数だけ存在している。つまり、現実の世界を写しとっている科学的な言語を全て分析すれば、真理に到達できる。</span>
		</p>
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
			$('.fadein-2').fadeIn(1000);
		}, 2000);
	}, 2000);
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
