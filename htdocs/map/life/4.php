<?php include("../../parts/header.php"); ?>
<?php $link = "#life-4";?>
<style type="text/css">
	.ego--1 {
		top: 70%;
		left: 50%;
		width: 15%;
		height: 15%;
	}
	.notion--1 {
		top: 70%;
		left: 50%;
		width: 25%;
		height: 25%;
		z-index: -1000;
	}
	.notion--2 {
		top: 25%;
		left: 50%;
		width: 25%;
		height:25%;
	}
	.object-text--bottom {
		top: 108%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">エウダイモニア<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">アリストテレス（B.C.384-B.C.322)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg class="object-svg" width="628" height="628" viewBox="0 0 628 628">
			<line class="connect-line connect-line--l d-none fadein-4" x1="314" y1="400" x2="314" y2="200"/>
		</svg>
		<div class="object--circle notion notion--1 d-none fadein-1">
			<div class="object-text--bottom d-none fadein-2">可能性の実現</div>
		</div>
		<div class="object--circle ego ego--1">
			<div class="object-text">自分</div>
		</div>
		<div class="object--circle notion notion--2 d-none fadein-3">
			<div class="object-text">エウダイモニア</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">自分の可能性を実現し、人間としての活動を完全に果たすべきである。</span>
			<span class="single-diagram__content__text__2 animation-text">それによって、人は真の幸福（エウダイモニア）を得ることができる。</span>
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
	setTimeout(function(){
		$('.fadein-2').fadeIn(1000);
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.fadein-3').fadeIn(1000);
			setTimeout(function(){
				$('.fadein-4').fadeIn(1000);
				$('.single-diagram__content__text__2').addClass('is-animation-text');
			}, 2000);
		}, 2000);
	}, 2000);
}, 1500);
</script>
