<?php include("../../parts/header.php"); ?>
<?php $link = "#mind-7";?>
<style>
	.notion--1 {
		top: 50%;
		left: 28%;
		width: 25%;
		height: 25%;
	}
	.notion {
		border-radius: 50%;
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
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<line class="connect-line connect-line--l d-none fadein-3" x1="191" y1="314" x2="466" y2="314"/>
			<polygon class="creation-arrow d-none fadein-1 fadeout-1" points="326,314 302,302 302,326 "/>
		</svg>
		<div class="object--circle notion--1 rotate-box">
			<div class="notion rotate-box__element">
				<div class="object-text">意識</div>
			</div>
		</div>
		<div class="thing--1 scale-box">
			<div class="material scale-box__element">
				<div class="object-text c-black d-none fadein-2">生産物</div>
			</div>
		</div>
		<div class="text text--1 d-none fadein-1 fadeout-1">生産</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">階級意識<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">カール・マルクス（1813-1883)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">西洋哲学で伝統的に考えられてきた普遍的な人間性は存在しない。</span><span class="single-diagram__content__text__2 animation-text">労働によって自分が作り出したものの意味や価値を通じて自分は形成される。つまり、どの階級に属するかによって、人はものの見え方が変わってくる（階級意識）。</span></p>

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
						$('.fadeout-1').fadeOut(1000);
						setTimeout(function(){
							$('.fadein-3').fadeIn(1000);
							setTimeout(function(){
								$('.single-diagram__content__text__2').addClass('is-animation-text');
								anime({
									targets: '.rotate-box__element',
									rotateY: '720deg',
									background: '#EA60BC',
									easibong: 'easeInOutCubic',
									duration: 300
								});
								$('.rotate-box__element').css('border', 'none');
								$('.rotate-box__element').find('.object-text').css('color', '#222');
							}, 1500);
						}, 1500);
					}, 1500);
			}, 1500);
		}, 1500);
	}, 1500);
</script>
<?php include("../../parts/footer.php"); ?>
