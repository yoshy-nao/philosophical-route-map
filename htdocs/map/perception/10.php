<?php include("../../parts/header.php"); ?>
<?php $link = "#perception-10";?>
<style>
	.ego--1 {
		top: 50%;
		left: 40%;
		width: 28%;
		height: 28%;
		z-index: -1000;
		background: #333333;
	}
	.scale-box__element {
		border: 1px dashed #222;
		border-radius: 50%;
	}
	.thing--1 {
		top: 50%;
		left: 60%;
		width: 28%;
		height: 28%;
		background: #333333;
	}
	.god--1 {
		top: 18%;
		left: 25%;
		width: 15%;
		height: 15%;
	}
	.text--1 {
		top: 70%;
		left: 50%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">純粋経験<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">西田 幾多郎(1870-1945)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
		</svg>
		<div class="object--circle ego ego--1">
			<div class="object-text--bottom d-none fadein-2">主観</div>
		</div>
		<div class="object--square thing thing--1">
			<div class="object-text--bottom d-none fadein-2">客観</div>
		</div>
		<div class="object-text d-none fadein-1 fadeout-1">主客未分</div>
		<div class="text text--1 fadeout-1">純粋経験</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">ありのままの世界では主観と客観が分かれる前の状態（主客未分）である。この主客未分の状態の経験を純粋経験と呼び、この経験が真の存在である。</span>
			<span class="single-diagram__content__text__2 animation-text">そして、その後思考のはたらきによって主観と客観に分かれる。</span>
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
				$('.fadeout-1').fadeOut(1000);
				anime({
					targets: '.ego--1',
					left: '25%',
					background: '#EA60BC',
					easing: 'easeInOutCubic',
					duration: 800
				});
				anime({
					targets: '.thing--1',
					left: '75%',
					background: '#78C1BD',
					easing: 'easeInOutCubic',
					duration: 800
				});
				setTimeout(function(){
					$('.single-diagram__content__text__2').addClass('is-animation-text');
					$('.fadein-2').fadeIn(1000);
				}, 2000);
			}, 2000);
		}, 1500);
	}, 1500);
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
