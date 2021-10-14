<?php include("../../parts/header.php"); ?>
<?php $link = "#mind-6";?>
<style>
	.ego--1 {
		top: 50%;
		left: 28%;
		width: 25%;
		height: 25%;
	}
	.ego--2 {
		top: 50%;
		left: 72%;
		width: 25%;
		height: 25%;
	}
	.scale-box__element {
		border-radius: 30%;
	}
	.thing--1 {
		top: 50%;
		left: 72%;
		width: 25%;
		height: 25%;
	}
	.text--1 {
		top: 43%;
		left: 50%;
	}
	.rotate-box__element {
		border-radius: 50%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<line class="connect-line connect-line--l d-none fadein-2" x1="191" y1="314" x2="466" y2="314"/>
			<!-- <polygon class="creation-arrow d-nonxe fadein-1 fadeout-1" points="326,314 302,302 302,326 "/> -->
		</svg>
		<div class="object--circle ego--1 rotate-box">
			<div class="ego rotate-box__element">
				<div class="object-text">意識</div>
			</div>
		</div>
		<div class="object--circle ego ego--2 d-none fadein-1">
			<div class="object-text">他者</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">絶対知<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">フリードリヒ・ヘーゲル（1770-1831)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">人間の意識は最初の段階では、外に向けられた素朴な意識である。</span><span class="single-diagram__content__text__2 animation-text">これが他者や自然との関わりの中で、自分の自立と自由を手に入れることを目指す「自己意識」に変わる。</span><span class="single-diagram__content__text__3 animation-text">そしてさらに、対象への意識と自己意識が統合された「理性」に成長し、最終的に完全な認識能力を持つ「絶対知」に到達する。</span></p>

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
				anime({
					targets: '.rotate-box__element',
					rotateY: '720deg',
					easibong: 'easeInOutCubic',
					duration: 300
				});
				setTimeout(function(){
					$('.single-diagram__content__text__2').addClass('is-animation-text');
					$('.ego--1').find('.object-text').text('自己意識');
					setTimeout(function(){
						anime({
							targets: '.rotate-box__element',
							rotateY: '1440deg',
							easibong: 'easeInOutCubic',
							duration: 300
						});
						setTimeout(function(){
							$('.single-diagram__content__text__3').addClass('is-animation-text');
							$('.ego--1').find('.object-text').text('理性');
							setTimeout(function(){
								anime({
									targets: '.rotate-box__element',
									rotateY: '2160deg',
									easibong: 'easeInOutCubic',
									duration: 300
								});
								setTimeout(function(){
									$('.ego--1').find('.object-text').text('絶対知');
								}, 300);
							}, 3000);
						}, 300);
					}, 3000);
				}, 300);
			}, 1500);
		}, 1500);
	}, 1500);
</script>
<?php include("../../parts/footer.php"); ?>
