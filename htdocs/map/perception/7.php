<?php include("../../parts/header.php"); ?>
<?php $link = "#perception-7";?>
<style>
	.ego--1 {
		top: 50%;
		left: 50%;
		width: 65%;
		height: 65%;
		z-index: -100;
	}
	.ego--2 {
		background-color: #FFF;
		top: 50%;
		left: 50%;
		width: 60%;
		height: 60%;
		z-index: -90;
	}
	.thing--1 {
		background: #FFF;
		border: 1px dashed #222;
		top: 57%;
		left: 34%;
		width: 15%;
		height: 15%;
	}
	.thing--2 {
		background: #FFF;
		border: 1px dashed #222;
		top: 57%;
		left: 66%;
		width: 15%;
		height: 15%;
	}
	.thing--3 {
		top: 32%;
		left: 50%;
		width: 15%;
		height: 15%;
	}
	.text--1 {
		top: 65%;
		left: 50%;
	}
	.text--2 {
		top: 46%;
		left: 56%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">弁証法<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">フリードリヒ・ヘーゲル（1770-1831)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<line class="connect-line connect-line--l d-none fadein-1" x1="224.6" y1="357.9" x2="404.3" y2="357.9"/>
			<polygon class="battle d-none fadein-1" points="339.6,358 330.9,361.9 337.1,369.1 327.5,368.8 330,378 321.5,373.6 319.7,383 314,375.3 308.3,382.9
					306.5,373.6 298,378 300.5,368.8 290.9,369.1 297.1,361.9 288.4,358 297.1,354.1 290.9,346.9 300.5,347.2 298,338 306.5,342.4
					308.3,333 314,340.7 319.7,333.1 321.5,342.4 330,338 327.5,347.2 337.1,346.9 330.9,354.1 	"/>
			<polygon class="creation-arrow d-none fadein-2" points="314.5,280.8 307.2,295.8 321.7,295.8 "/>
		</svg>
		<div class="object--circle ego ego--1">
			<div class="object-text--bottom">主観</div>
		</div>
		<div class="object--circle ego ego--2"></div>
		<div class="object--square thing thing--1">
			<div class="object-text object-text--s">テーゼ</div>
		</div>
		<div class="object--square thing thing--2">
			<div class="object-text object-text--s">アンチテーゼ</div>
		</div>
		<div class="object--circle thing--3 scale-box">
			<div class="thing scale-box__element">
				<div class="object-text object-text--s">ジンテーゼ</div>
			</div>
		</div>
		<div class="text text--1 c-black d-none fadein-1">対立</div>
		<div class="text text--2 c-black d-none fadein-2">止揚</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">主観の上に現れる現象にのみ焦点を当てる。</span>
			<span class="single-diagram__content__text__2 animation-text">まず、人間の意識上にはテーゼとアンチテーゼという二項対立の原理が働いている。</span>
			<span class="single-diagram__content__text__3 animation-text">そして、この二つの対立から、より統合されたジンテーゼの認識に至る。このメカニズムを弁証法と呼ぶ。これを繰り返すことによって、いずれ客観の全貌を完璧に認識する能力を持った精神（絶対精神）に到達する。</span></p>

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
			anime({
				targets: '.thing--1',
				left: [
					{ value: '42.5%', duration: 100, delay: 0 },
					{ value: '34%', duration: 500, delay: 100 }
				],
				easing: 'easeInOutCubic'
			});
			anime({
				targets: '.thing--2',
				left: [
					{ value: '57.5%', duration: 100, delay: 0 },
					{ value: '66%', duration: 500, delay: 100 }
				],
				easing: 'easeInOutCubic'
			});
			$('.single-diagram__content__text__2').addClass('is-animation-text');
			setTimeout(function(){
				$('.fadein-1').fadeIn(1000);
				setTimeout(function(){
					$('.fadein-2').fadeIn(1000);
					setTimeout(function(){
						$('.scale-box__element').css('transform', 'scale(1)');
						$('.single-diagram__content__text__3').addClass('is-animation-text');
					}, 2000);
				}, 2000);
			}, 500);
		}, 2000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
