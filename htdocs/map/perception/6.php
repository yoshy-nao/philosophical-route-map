<?php include("../../parts/header.php"); ?>
<?php $link = "#perception-6";?>
<style>
	.ego--1 {
		top: 50%;
		left: 25%;
		width: 28%;
		height: 28%;
	}
	.ego--2 {
		top: 50%;
		left: 25%;
	}
	.thing--1 {
		top: 50%;
		left: 75%;
		width: 28%;
		height: 28%;
	}
	.text--1 {
		top: 42%;
		left: 50%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">事行<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">ヨハン・ゴットリープ・フィヒテ（1762-1814）</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<line class="connect-line connect-line--l d-none fadein-2" x1="192.1" y1="314" x2="444.6" y2="314"/>
			<polygon class="battle d-none fadein-2" points="339.6,314 330.9,317.9 337.1,325.1 327.5,324.8 330,334 321.5,329.6 319.7,339 314,331.3 308.3,338.9 306.5,329.6 298,334 300.5,324.8 290.9,325.1 297.1,317.9 288.4,314 297.1,310.1 290.9,302.9 300.5,303.2 298,294 306.5,298.4 308.3,289 314,296.7 319.7,289.1 321.5,298.4 330,294 327.5,303.2 337.1,302.9 330.9,310.1 	"/>
		</svg>
		<div class="object--circle ego ego--1">
			<div class="object-text">自我</div>
		</div>
		<div class="object--square thing thing--1 d-none fadein-1">
			<div class="object-text">非我</div>
		</div>
		<div class="text text--1 d-none fadein-2">葛藤</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">まず、自我という存在を行為の出発点とする。</span>
			<span class="single-diagram__content__text__2 animation-text">そして、周囲の自然（非我）を認識し、その弊害を乗り越えて自我を維持するために葛藤することで自由を目指す。このように自分を維持しようと進む根源的な自我の働きを「事行」と呼ぶ。</span>
		</p>
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
			$('.fadein-1').fadeIn(1000);
			$('.single-diagram__content__text__2').addClass('is-animation-text');
			setTimeout(function(){
				anime({
					targets: '.ego--1',
					left: [
						{ value: '36%', duration: 100, delay: 0 },
						{ value: '25%', duration: 500, delay: 100 }
					],
					easing: 'easeInOutCubic'
				});
				anime({
					targets: '.thing--1',
					left: [
						{ value: '64%', duration: 100, delay: 0 },
						{ value: '75%', duration: 500, delay: 100 }
					],
					easing: 'easeInOutCubic'
				});
				setTimeout(function(){
					$('.fadein-2').fadeIn(1000);
				}, 500);
			}, 2000);
		}, 3000);
	}, 1000);
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
