<?php include("../../parts/header.php"); ?>
<?php $link = "#life-9";?>
<style type="text/css">
	.negative {
		width: 12%;
		height: 12%;
	}
	.negative--1 {
		top: 50%;
		left: 35%;
	}
	.negative--2 {
		top: 50%;
		left: 65%;
	}
	.ego {
		border-radius: 50%;
	}
	.ego--1 {
		top: 50%;
		left: 20%;
		width: 10%;
		height: 10%;
	}
	.notion {
		width: 25%;
		height: 25%;
	}
	.notion--1 {
		top: 50%;
		left: 20%;
	}
	.notion--2 {
		top: 50%;
		left: 50%;
	}
	.notion--3 {
		top: 50%;
		left: 80%;
		z-index: -1000;
	}
	.god--1 {
		width: 15%;
		height: 15%;
		top: -50%;
		left: 80%;
		z-index: -1000;
	}
</style>
<script>
setTimeout(function(){
	$('.single-diagram__content__text__1').addClass('is-animation-text');
	setTimeout(function(){
		$('.single-diagram__content__text__2').addClass('is-animation-text');
		$('.fadein-1').fadeIn(1000);
		setTimeout(function(){
			$('.fadein-2').fadeIn(1000);
			setTimeout(function(){
				anime({
				  targets: '.ego--1',
				  left: '35%',
				  easing: 'easeInOutCubic',
					duration: 1000
				});
				setTimeout(function(){
					$('.single-diagram__content__text__3').addClass('is-animation-text');
					$('.fadein-3').fadeIn(1000);
					setTimeout(function(){
						anime({
						  targets: '.ego--1',
						  left: '50%',
						  easing: 'easeInOutCubic',
							duration: 1000
						});
						setTimeout(function(){
							$('.fadein-4').fadeIn(1000);
							setTimeout(function(){
								anime({
								  targets: '.ego--1',
								  left: '65%',
								  easing: 'easeInOutCubic',
									duration: 1000
								});
								setTimeout(function(){
									$('.single-diagram__content__text__3').addClass('is-animation-text');
									$('.fadein-5').fadeIn(1000);
									setTimeout(function(){
										$('.single-diagram__content__text__4').addClass('is-animation-text');
										anime({
										  targets: '.ego--1',
										  left: '80%',
										  easing: 'easeInOutCubic',
											duration: 1000
										});
										anime({
											targets: '.rotate-box__element',
											rotateY: '720deg',
											background: '#EA60BC',
											easibong: 'easeInOutCubic',
											duration: 300
										});
										setTimeout(function(){
											$('.ego--1').find('.object-text').text('単独者');
											anime({
											  targets: '.god--1',
											  top: '21%',
											  easing: 'easeInOutCubic',
												duration: 4000
											});
											$('.fadein-6').fadeIn(3000);
											setTimeout(function(){
												$('.fadein-7').fadeIn(1000);
											}, 4000);
										}, 1000);
									}, 1500);
								}, 2000);
							}, 1500);
						}, 2000);
					}, 1500);
				}, 2000);
			}, 1500);
		}, 2000);
	}, 3000);
}, 1000);
</script>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<g class="work-arrow d-none fadein-7">
				<line class="st1" x1="503" y1="274" x2="503" y2="207.5"/>
				<polygon class="st2" points="508.7,211.4 503,190 497.3,211.4 			"/>
			</g>
		</svg>
		<div class="object--circle notion notion--1 d-none fadein-1">
			<div class="object-text--bottom">美的実存</div>
		</div>
		<div class="object--circle notion notion--2  d-none fadein-3">
			<div class="object-text--bottom">倫理的実存</div>
		</div>
		<div class="object--circle notion notion--3  d-none fadein-5">
			<div class="object-text--bottom">宗教的実存</div>
		</div>
		<div class="object--circle negative negative--1 d-none fadein-2">
			<div class="object-text">絶望</div>
		</div>
		<div class="object--circle negative negative--2  d-none fadein-4">
			<div class="object-text">絶望</div>
		</div>
		<div class="object--circle ego--1 rotate-box">
			<div class="ego rotate-box__element">
				<div class="object-text">自分</div>
			</div>
		</div>
		<div class="object--circle god god--1 d-none fadein-6">
			<div class="object-text">神</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">実存の3段階<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">セーレン・キルケゴール（1813–1855）</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">私にとっての真理を探求する立場を実存主義という。そして、人間が真の実存に到達するための道のりは三段階ある。</span>
			<span class="single-diagram__content__text__2 animation-text">第一段階は欲望のままに快楽を追求する「美的実存」。</span>
			<span class="single-diagram__content__text__3 animation-text">しかし絶望し、その絶望から立ち直るために社会貢献や自己実現によって自己表現をしようとする「倫理的実存」。</span>
			<span class="single-diagram__content__text__4 animation-text">だが、再び絶望し、その最終段階として「宗教的実存」に到達する。この神と向き合う単独者のあり方こそ真の実存である。</span>
		</p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<?php include("../../parts/footer.php"); ?>
