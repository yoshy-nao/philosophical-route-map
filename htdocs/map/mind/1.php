<?php include("../../parts/header.php"); ?>
<?php $link = "#mind-1";?>
<style text="">
	.god--1 {
		top: 15%;
		left: 50%;
		width: 17%;
		height: 17%;
	}
	.ego--1 {
		top: 15%;
		left: 50%;
		width: 12.5%;
		height: 12.5%;
	}
	.ego--2 {
		top: 35.5%;
		left: 50%;
		width: 12.5%;
		height: 12.5%;
	}
	.ego--3 {
		top: 35.5%;
		left: 50%;
		width: 12.5%;
		height: 12.5%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<g class="body">
				<path d="M349.4,269.7h-70.9c-15.5,0-28.1,9-28.1,20l9.4,143.5c0,7.7,6.1,14.4,15.1,17.8v111.7
					c0,13.4,10.9,24.2,24.2,24.2h29.5c13.4,0,24.2-10.9,24.2-24.2V451c9-3.3,15.1-10,15.1-17.8l9.4-143.5
					C377.5,278.7,364.9,269.7,349.4,269.7z"/>
				<circle cx="314" cy="222" r="39"/>
				<g class="connect-line connect-line--l d-none fadein-2">
					<line x1="270" y1="321.7" x2="316.1" y2="216"/>
					<line x1="358" y1="361.7" x2="324" y2="250.4"/>
				</g>
			</g>
		</svg>
		<div class="object--circle god--world god--1">
			<div class="object-text">イデア界</div>
		</div>
		<div class="object--circle ego ego--1">
			<div class="object-text">魂</div>
		</div>
		<div class="object--circle ego ego--2 d-none fadein-1">
			<div class="object-text">意志</div>
		</div>
		<div class="object--circle ego ego--3 d-none fadein-1">
			<div class="object-text">欲望</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">魂の３分説<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">プラトン（B.C.427-B.C.347)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">魂はもともとイデア界に住んでおり、生まれる際に地上に降りてきた。</span><span class="single-diagram__content__text__2 animation-text">その魂は「理性」「意志」「欲望」の3つに分類され、それぞれ頭部・胸部・腹部に宿る。</span><span class="single-diagram__content__text__3 animation-text">そして、理性によって意志と欲望のバランスを取ることで魂の調和を目指すべきである。</span></p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
	setTimeout(function(){
		$('.single-diagram__content__text__1').addClass('is-animation-text');
	}, 1000);
	setTimeout(function(){
		anime({
			targets: '.ego--1',
			top: '35.5%',
			easing: 'easeInOutCubic',
			duration: 1500
		});
		setTimeout(function(){
			anime({
				targets: '.ego--2',
				top: '51%',
				left: '43%',
				easing: 'easeInOutCubic',
				duration: 1000
			});
			anime({
				targets: '.ego--3',
				top: '62%',
				left: '57%',
				easing: 'easeInOutCubic',
				duration: 1000
			});
			$('.ego--1').find('.object-text').text('理性');
			$('.fadein-1').fadeIn();
			$('.single-diagram__content__text__2').addClass('is-animation-text');
			setTimeout(function(){
				$('.fadein-2').fadeIn(2000);
				$('.single-diagram__content__text__3').addClass('is-animation-text');
			}, 3000);
		}, 1500);
	}, 2000);
</script>
<?php include("../../parts/footer.php"); ?>
