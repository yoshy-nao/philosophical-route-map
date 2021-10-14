<?php include("../../parts/header.php"); ?>
<?php $link = "#social-9";?>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<circle class="social-area" cx="314" cy="420" r="150"/>
			<g class="work-arrow d-none fadein-2">
				<line class="st1" x1="314" y1="218.1" x2="314" y2="350.8"/>
				<polygon class="st2" points="309.7,347.8 314,364 318.3,347.8 			"/>
			</g>
		</svg>
		<div class="object--circle citizen citizen--1">
			<div class="object-text object-text--s">人民</div>
		</div>
		<div class="object--circle notion notion--1 d-none fadein-1">
			<div class="object-text">道徳法則</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">定言命法<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">イマヌエル・カント（1724-1804)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">人間界には従わなければならない普遍的な道徳法則がある。</span>
			<span class="single-diagram__content__text__2 animation-text">この道徳法則は良心の声で「汝、〜すべし」と私たちの理性に訴えかけてくる。そして、その道徳は手段ではなく目的そのものでなくてはならない。つまり、道徳法則には無条件に従わなければならない（定言命法）。</span>
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
		$('.single-diagram__content__text__2').addClass('is-animation-text');
	}, 3000);
}, 1000);
</script>
<style>
	.citizen--1 {
		top: 67%;
		left: 50%;
	}
	.word--1 {
		top: 86%;
		left: 50%;
	}
	.notion {
		top: 20%;
		left: 50%;
	}
	.notion--2 {
		width: 30%;
		height: 30%;
		top: 67%;
		left: 50%;
		z-index: -100;
	}
</style>
<?php include("../../parts/footer.php"); ?>
