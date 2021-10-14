<?php include("../../parts/header.php"); ?>
<?php $link = "#life-5";?>
<style type="text/css">
	.negative--1 {
		top: 50%;
		left: 25%;
		width: 20%;
		height: 20%;
	}
	.ego--1 {
		top: 50%;
		left: 25%;
		width: 10%;
		height: 10%;
	}
	.notion--1 {
		top: 50%;
		left: 75%;
		width: 25%;
		height: 25%;
	}
</style>
<script>
	setTimeout(function(){
		anime({
		  targets: '.ego--1',
		  left: '75%',
		  easing: 'easeInOutCubic',
			duration: 2000
		});
		$('.single-diagram__content__text__1').addClass('is-animation-text');
			setTimeout(function(){
				$('.fadein-1').fadeIn(1000);
				setTimeout(function(){
					$('.fadein-2').fadeIn(1000);
					$('.single-diagram__content__text__2').addClass('is-animation-text');
				}, 1000);
			}, 3000);
	}, 1500);
</script>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
		</svg>
		<div class="object--circle negative negative--1">
			<div class="object-text">欲望</div>
		</div>
		<div class="object--circle notion notion--1 d-none fadein-1">
			<div class="object-text--bottom d-none fadein-2">アタラクシア</div>
		</div>
		<div class="object--circle ego ego--1">
			<div class="object-text">自分</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">アタラクシア<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">エピクロス（B.C.342-B.C.270）</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">欲望が多い政治や社会の雑踏から身を引き、必要最低限の条件で禁欲的な生活をするべきである。</span>
			<span class="single-diagram__content__text__2 animation-text">それによって、快楽を得ることができる。快楽とは肉体における苦しみがなく、心が乱れていない状態（アタラクシア）のことであり、このアタラクシアを実現する人生こそが幸福である。</span>
		</p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<?php include("../../parts/footer.php"); ?>
