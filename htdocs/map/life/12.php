<?php include("../../parts/header.php"); ?>
<?php $link = "#life-12";?>
<style type="text/css">
	.negative--1 {
		top: 70%;
		left: 50%;
		width: 40%;
		height: 40%;
		z-index: -1000;
	}
	.ego--1 {
		top: 80%;
		left: 50%;
		width: 10%;
		height: 10%;
	}
	.notion--1 {
		top: 20%;
		left: 50%;
		width: 12%;
		height: 12%;
		z-index: -100;
	}
	.notion--2 {
		top: 52%;
		left: 50%;
		width: 15%;
		height: 15%;
		background: none;
	}
	.text--1 {
		top: 37%;
		left: 56%;
	}
	.object-text--bottom {
		top: 112%;
	}
	.object-text--top {
		bottom: 112%;
	}
</style>
<script>
setTimeout(function(){
$('.single-diagram__content__text__1').addClass('is-animation-text');
	setTimeout(function(){
		$('.fadein-1').fadeIn(1000);
		$('.single-diagram__content__text__2').addClass('is-animation-text');
		setTimeout(function(){
			anime({
			  targets: '.ego--1',
			  top: '52%',
			  easing: 'easeInOutCubic',
				duration: 1000
			});
			$('.fadein-2').fadeIn(1000);
			setTimeout(function(){
				$('.fadein-3').fadeIn(1000);
				$('.single-diagram__content__text__3').addClass('is-animation-text');
			}, 2000);
		}, 2000);
	}, 3000);
}, 1000);
</script>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<g class="work-arrow d-none fadein-3">
				<line class="st1" x1="313.6" y1="240" x2="313.6" y2="198.6"/>
				<polygon class="st2" points="318.4,201.9 313.6,184 308.8,201.9 			"/>
			</g>
		</svg>
		<div class="object--circle negative negative--1 fadeout-1">
			<div class="object-text">頽落</div>
		</div>
		<div class="object--circle notion notion--1 d-none fadein-1">
			<div class="object-text">死</div>
		</div>
		<div class="object--circle notion notion--2 d-none fadein-2">
			<div class="object-text--top">本来性</div>
		</div>
		<div class="object--circle ego ego--1">
			<div class="object-text">自分</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">本来性<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">マルティン・ハイデガー（1889-1976）</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">本来は存在について問う能力を持つ人間だが、普段は自分の存在を忘れ、日常生活に没頭している（頽落）。</span>
			<span class="single-diagram__content__text__2 animation-text">しかし、自分の死の可能性と向き合うとき、存在の本来性に目覚める。</span>
			<span class="single-diagram__content__text__3 animation-text">自らの最期を覚悟をすると、日常生活への埋没から抜け出し、掛け替えのない自分の人生を真剣に生きられるのだ。</span>
		</p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<?php include("../../parts/footer.php"); ?>
