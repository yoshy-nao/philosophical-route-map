<?php include("../../parts/header.php"); ?>
<?php $link = "#social-6";?>
<style type="text/css">
	.government {
		width: 10%;
		height: 10%
	}
	.government--1 {
		top: 29%;
		left: 50%;
	}
	.government--2 {
		top: 29%;
		left: 50%;
	}
	.government--3 {
		top: 29%;
		left: 50%;
	}
	.citizen {
		width: 12%;
		height: 12%
	}
	.citizen--1 {
		width: 10%;
		height: 10%;
		top: 51%;
		left: 50%;
	}
	.text--1 {
		top: 44%;
		left: 66%;
	}
	.text--2 {
		top: 70%;
		left: 50%;
	}
	.text--3 {
		top: 44%;
		left: 34%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<circle class="social-area" cx="314" cy="314" r="210"/>
			<polygon class="connect-line connect-line--m d-none fadein-2" points="314,162.9 171.7,409.4 456.3,409.4 "/>
			<g class="work-arrow">
				<g class="d-none fadein-1">
					<line x1="314" y1="228.4" x2="314" y2="266.7"/>
					<polygon points="310.7,264.4 314,276.7 317.3,264.4 			"/>
				</g>
				<g class="d-none fadein-2">
					<line x1="226.5" y1="371.3" x2="259.6" y2="352.2"/>
					<polygon points="259.3,356.2 268.3,347.2 256.1,350.5 			"/>
				</g>
				<g class="d-none fadein-2">
					<line x1="401.5" y1="371.3" x2="368.4" y2="352.2"/>
					<polygon points="371.9,350.5 359.7,347.2 368.7,356.2 			"/>
				</g>
			</g>
		</svg>
		<div class="object--circle government government--2">
			<div class="object-text object-text--s">立法権</div>
		</div>
		<div class="object--circle government government--3">
			<div class="object-text object-text--s">司法権</div>
		</div>
		<div class="object--circle government government--1">
			<div class="object-text object-text--s">国家</div>
		</div>
		<div class="object--circle citizen citizen--1">
			<div class="object-text object-text--s">人民</div>
		</div>
		<div class="text text--1 d-none fadein-2">抑制</div>
		<div class="text text--2 d-none fadein-2">抑制</div>
		<div class="text text--3 d-none fadein-2">抑制</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">三権分立<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">シャルル・ド・モンテスキュー（1689-1775)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">権力が一箇所に集中している国家においては、政治の自由は保証されない。</span>
			<span class="single-diagram__content__text__2 animation-text">そのため、司法権、立法権、行政権を独立させるべきである。</span>
		</p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
	//JavaScript
	// function linkUrlA() {
	// 	location.href = '/history/5.php'
	// }
	// var button = $('#button-1');
	// button.click(function(){
	// 	$('.fadeout').fadeOut();
	// 	setTimeout(linkUrlA, 1500);
	// });
	setTimeout(function(){
		$('.fadein-1').fadeIn(2000);
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.government--1').find('.object-text').text('行政権');
			anime({
				targets: '.government--2',
				top: '63%',
				left: '70%',
				easing: 'easeInOutCubic',
				duration: 1500
			});
			anime({
				targets: '.government--3',
				top: '63%',
				left: '30%',
				easing: 'easeInOutCubic',
				duration: 1500
			});
			setTimeout(function(){
				$('.fadein-2').fadeIn(2000);
				$('.single-diagram__content__text__2').addClass('is-animation-text');
			}, 1500);
		}, 3000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
