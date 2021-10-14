<?php include("../../parts/header.php"); ?>
<?php $link = "#life-3";?>
<style type="text/css">
	.negative--1 {
		top: 58%;
		left: 25%;
		width: 15%;
		height: 15%;
	}
	.ego--1 {
		top: 58%;
		left: 25%;
		width: 10%;
		height: 10%;
	}
	.notion--1 {
		top: 27%;
		left: 68.5%;
		width: 12%;
		height: 12%;
	}
	.world--1 {
		top: 58%;
		left: 68.5%;
		width: 30%;
		height: 30%;
		z-index: -1000;
	}
	.word--1 {
		top: 62%;
		left: 48%;
	}
	.word--2 {
		top: 43%;
		left: 75%;
	}
</style>
<script>
	setTimeout(function(){
		anime({
		  targets: '.ego--1',
		  left: '68.5%',
		  easing: 'easeInOutCubic',
			duration: 1500
		});
		setTimeout(function(){
			$('.fadein-1').fadeIn(1000);
			$('.single-diagram__content__text__1').addClass('is-animation-text');
			setTimeout(function(){
				$('.fadein-2').fadeIn(1000);
				setTimeout(function(){
					$('.fadein-3').fadeIn(1000);
					setTimeout(function(){
						$('.fadein-4').fadeIn(1000);
						$('.single-diagram__content__text__2').addClass('is-animation-text');
					}, 1500);
				}, 1500);
			}, 3000);
		}, 1500);
	}, 1500);
</script>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<line class="connect-line connect-line--l fadein-4 d-none" x1="428.6" y1="349" x2="428.6" y2="204"/>
			<g class="work-arrow fadein-2 d-none">
				<line x1="377" y1="363.3" x2="236.1" y2="363.3"/>
				<polygon points="240,357.6 218.7,363.3 240,369 			"/>
			</g>
		</svg>
		<div class="object--circle god--world world--1">
			<div class="object-text--bottom">自然</div>
		</div>
		<div class="word word--1 fadein-2">否定</div>
		<div class="object--circle negative negative--1">
			<div class="object-text">欲望</div>
		</div>
		<div class="object--circle ego ego--1">
			<div class="object-text">自分</div>
		</div>
		<div class="object--circle notion notion--1 d-none fadein-3">
			<div class="object-text">徳</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">シニシズム<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">ディオゲネス（B.C.412-B.C.323）</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">必要なものを最小限に抑え、あらゆる欲望、地位、社会の制約を否定し、自然に従って生きる。</span>
			<span class="single-diagram__content__text__2 animation-text">それによって、徳を得ることができ、真の自由と心の満足を得ることができる。</span>
		</p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<?php include("../../parts/footer.php"); ?>
