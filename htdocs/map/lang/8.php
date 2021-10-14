<?php include("../../parts/header.php"); ?>
<?php $link = "#lang-5";?>
<style>
	.lang--1 {
		top: 50%;
		left: 70%;
		width: 22%;
		height: 22%;
	}
	.notion--1 {
		top: 50%;
		left: 30%;
		width: 22%;
		height: 22%;
	}
	.text--1 {
		top: 45%;
		left: 50%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<line class="connect-line connect-line--l d-none fadein-2 fadeout-1" x1="225.7" y1="314.2" x2="500.7" y2="314.2"/>
		</svg>
		<div class="object--circle notion--lang lang--1 d-none fadein-1">
			<div class="object-text">コピー</div>
		</div>
		<div class="object--circle notion notion--1"><div class="object-text">オリジナル</div></div>
		<div class="text text--1 d-none fadein-2 fadeout-1">差延</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">脱構築<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">ジャック・デリダ（1930-2004)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">オリジナル（声や思考）とそれを置き換えたコピー（文字）は必ずしも一致せず、変換される際にズレ（差延）が生じる。</span>
			<span class="single-diagram__content__text__2 animation-text">そこで、オリジナルとコピーはそれぞれ独立したものとして、切り離して考えるべきである。</span>
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
			setTimeout(function(){
				$('.single-diagram__content__text__2').addClass('is-animation-text');
				$('.fadeout-1').fadeOut(1000);
			}, 3000);
		}, 1000);
	}, 1000);
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
