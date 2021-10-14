<?php include("../../parts/header.php"); ?>
<?php $link = "#mind-11";?>
<style text="">
	.god--1 {
		top: 15%;
		left: 50%;
		width: 17%;
		height: 17%;
	}
	.ego--1 {
		top: 40%;
		left: 50%;
		width: 12.5%;
		height: 12.5%;
		border: 1px dashed #222;
	}
	.text--1 {
		top: 21.5%;
		left: 50%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<g class="material ego--2">
				<circle cx="314" cy="134.3" r="42.8"/>
				<path d="M352.9,186.7h-77.8c-17,0-30.8,9.8-30.8,22l10.3,157.5c0,8.5,6.7,15.8,16.6,19.5v122.7
					c0,14.7,11.9,26.6,26.6,26.6h32.4c14.7,0,26.6-11.9,26.6-26.6V385.7c9.8-3.7,16.6-11,16.6-19.5l10.3-157.5
					C383.7,196.5,369.9,186.7,352.9,186.7z"/>
			</g>
		</svg>
		<div class="object--circle ego ego--1">
			<div class="object-text">精神</div>
		</div>
		<div class="text text--1 c-black">身体</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">身体図式<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">モーリス・メルロ＝ポンティ（1908-1961）</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">身体はただの物体ではなく、精神と世界をつなぐものである。身体は意識とは異なる独自の意思を持ち、お互いに連絡をとりあって、行動のための図式（身体図式）を作っている。</span></p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
	setTimeout(function(){
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		anime({
			targets: '.ego--2',
			fill: [
			{ value: '#EA60BC', duration: 1000, delay: 1000 },
			{ value: '#78C1BD', duration: 1000, delay: 1000 },],
			easing: 'easeInOutQuad',
			loop: true
		});
	}, 2000);
</script>
<?php include("../../parts/footer.php"); ?>
