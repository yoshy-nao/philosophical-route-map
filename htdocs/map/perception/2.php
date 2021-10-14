<?php include("../../parts/header.php"); ?>
<?php $link = "#perception-2";?>
<style>
	.circle--1 {
		top: 50%;
		left: 25%;
	}
	.ego--1 {
		top: 50%;
		left: 25%;
		width: 28%;
		height: 28%;
		background-color: white;
	}
	.ego--2 {
		top: 44%;
		/* left: 25%; */
		left: 80%;
		width: 14%;
		height: 14%;
		opacity: 0.7;
		z-index: 100;
	}
	.ego--3 {
		top: 53%;
		/* left: 20%; */
		left: 80%;
		width: 14%;
		height: 14%;
		opacity: 0.7;
		z-index: 100;
	}
	.ego--4 {
		top: 53%;
		/* left: 30%; */
		left: 80%;
		width: 14%;
		height: 14%;
		opacity: 0.7;
		z-index: 100;
	}
	.scale-box__element {
		border-radius: 50%;
	}
	.thing--1 {
		top: 50%;
		left: 75%;
		width: 28%;
		height: 28%;
	}
	.text--1 {
		top: 45%;
		left: 49%;
	}
	.text--2 {
		top: 50%;
		left: 25%;
		z-index: 1000;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<line class="line--perception len len--1" x1="191" y1="314" x2="466" y2="314"/>
		</svg>
		<div class="object--circle ego--2 scale-box">
			<div class="ego scale-box__element scale-box__element--1">
			</div>
		</div>
		<div class="object--circle ego--3 scale-box">
			<div class="ego scale-box__element scale-box__element--2">
			</div>
		</div>
		<div class="object--circle ego--4 scale-box">
			<div class="ego scale-box__element scale-box__element--3">
			</div>
		</div>
		<div class="object--circle ego ego--1">
			<div class="object-text--bottom">主観</div>
			<div class="object-text fadeout-1">ダブラ・ラサ</div>
		</div>
		<div class="object--square thing thing--1">
			<div class="object-text--bottom">客観</div>
		</div>
		<div class="text text--1 d-none fadein-1">認識</div>
		<div class="object--circle circle--1"></div>
		<div class="text text--2 d-none fadein-2 c-black">複合観念</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">複合観念<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">ジョン・ロック（1632-1704)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">人は誰しも生まれたばかりの頃は観念に何も書かれていない白紙の状態（ダブラ・ラサ）である。</span>
			<span class="single-diagram__content__text__2 animation-text">そこから様々な経験によって、主観の中に複合観念が形成される。</span>
			<span class="single-diagram__content__text__3 animation-text">また、ものの性質は、形や大きさなどの物体から切り離せない「1次性質」と、人間の感覚によって捉えられることによって生まれる「2次性質」に分類できる。</span></p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
	setTimeout(function(){
	$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.len--1').addClass('line-effect--2');
			setTimeout(function(){
				$('.fadein-1').fadeIn(1000);
				setTimeout(function(){
					$('.single-diagram__content__text__2').addClass('is-animation-text');
					$('.fadeout-1').fadeOut(1000);
					anime({
					  targets: '.ego--2',
					  left: '25%',
					  easing: 'easeOutExpo',
						duration: 1500
					});
					$('.scale-box__element--1').css('transform', 'scale(1)');
					setTimeout(function(){
						anime({
						  targets: '.ego--3',
						  left: '20%',
						  easing: 'easeOutExpo',
							duration: 1500
						});
						$('.scale-box__element--2').css('transform', 'scale(1)');
						setTimeout(function(){
							anime({
							  targets: '.ego--4',
							  left: '30%',
							  easing: 'easeOutExpo',
								duration: 1500
							});
							$('.scale-box__element--3').css('transform', 'scale(1)');
							setTimeout(function(){
								$('.fadein-2').fadeIn(1000);
								setTimeout(function(){
									$('.single-diagram__content__text__3').addClass('is-animation-text');
								}, 3000);
							}, 1000);
						}, 1000);
					}, 1000);
				}, 2000);
			}, 2000);
		}, 3000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
