<?php include("../../parts/header.php"); ?>
<?php $link = "#social-7";?>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<circle class="social-area" cx="314" cy="314" r="210"/>
			<circle class="connect-line connect-line--m d-none fadein-1" cx="314" cy="314" r="116"/>
		</svg>
		<div class="object--circle citizen citizen--1">
			<div class="object-text object-text--s">人民</div>
		</div>
		<div class="object--circle citizen citizen--2">
			<div class="object-text object-text--s">人民</div>
		</div>
		<div class="object--circle citizen citizen--3">
			<div class="object-text object-text--s">人民</div>
		</div>
		<div class="text text--1 d-none fadein-2">直接民主主義</div>
		<div class="object--circle notion notion--1 d-none fadein-3">
			<div class="object-text">一般意志</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">一般意志<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">ジャン＝ジャック・ルソー（1712-1778)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">人民が意志を直接表明する直接民主制が理想である。</span>
			<span class="single-diagram__content__text__2 animation-text">それによって、社会構成員全員に共通する利益を目指す一般意志に基づいて政治を運営するべきである。</span>
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
				$('.fadein-3').fadeIn(1000);
				$('.single-diagram__content__text__2').addClass('is-animation-text');
			}, 3000);
		}, 1500);
	}, 1500);
</script>
<style>
	.citizen--1 {
		top: 32%;
		left: 50%;
	}
	.citizen--2 {
		top: 60%;
		left: 34%;
	}
	.citizen--3 {
		top: 60%;
		left: 66%;
	}
	.text--1 {
		top: 72%;
		left: 50%;
	}
	.notion--1 {
		width: 18%;
		height: 18%;
		top: 50%;
		left: 50%;
	}
</style>
<?php include("../../parts/footer.php"); ?>
