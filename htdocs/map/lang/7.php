<?php include("../../parts/header.php"); ?>
<?php $link = "#lang-7";?>
<style>
	.ego--1 {
		top: 50%;
		left: 50%;
		width: 20%;
		height: 20%;
	}
	.scale-box__element {
		border-radius: 50%;
	}
	.structure {
		top: 50%;
		left: 50%;
		width: 70%;
		height: 70%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<g class="creation-arrow d-none fadein-1">
				<polygon points="445.5,315.2 461.5,323.2 461.5,307.2 "/>
				<polygon points="182.5,312.8 166.5,304.8 166.5,320.8 "/>
				<polygon points="312.8,445.5 304.8,461.5 320.8,461.5 "/>
				<polygon points="315.2,182.5 323.2,166.5 307.2,166.5 "/>
			</g>
		</svg>
		<div class="object--circle ego--1 scale-box">
			<div class="notion--lang scale-box__element">
				<div class="object-text d-none fadein-2">テキスト</div>
			</div>
		</div>
		<div class="object--circle structure">
			<div class="object-text--bottom">構造</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">作者の死<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">ロラン・バルト(1915-1980)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">テキスト（作品）を作者を切り離して考え、テキストは既に社会にある無数のテキスト（構造）から引用したものである（作者の死）。</span>
			<span class="single-diagram__content__text__2 animation-text">また、このような考え方を文学以外にも応用し、あらゆる表現や出来事に隠された意味を解き明かそうとした。</span>
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
			$('.scale-box__element').css('transform', 'scale(1)');
			setTimeout(function(){
				$('.fadein-2').fadeIn(1000);
				setTimeout(function(){
					$('.single-diagram__content__text__2').addClass('is-animation-text');
				}, 3000);
			}, 1500);
		}, 1500);
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
