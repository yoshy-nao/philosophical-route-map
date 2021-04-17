<?php include("../../parts/header.php"); ?>
<?php $link = "#life-8";?>
<style type="text/css">
	.negative--1 {
		top: 70%;
		left: 50%;
		width: 40%;
		height: 40%;
	}
	.ego--1 {
		top: 80%;
		left: 50%;
		width: 10%;
		height: 10%;
	}
	.notion--1 {
		top: 28%;
		left: 28%;
		width: 12%;
		height: 12%;
	}
	.ego--2 {
		top: 29%;
		left: 73%;
		width: 10%;
		height: 10%;
	}
	.text--1 {
		top: 37%;
		left: 56%;
	}
</style>
<script>
	setTimeout(function(){
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			anime({
				targets: '.ego--1',
				top: '52%',
				easing: 'easeInOutCubic',
				duration: 1000
			});
			setTimeout(function(){
				$('.single-diagram__content__text__2').addClass('is-animation-text');
				$('.fadein-1').fadeIn(1000);
				setTimeout(function(){
					$('.fadein-2').fadeIn(2000);
					setTimeout(function(){
						$('.fadein-3').fadeIn(1000);
						setTimeout(function(){
							$('.fadein-4').fadeIn(2000);
						}, 1000);
					}, 2000);
				}, 1000);
			}, 2000);
		}, 3000);
	}, 1000);
</script>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">生への意志 <br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">アルトゥル・ショーペンハウアー（1788-1860）</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<line class="connect-line d-none fadein-2" x1="444.4" y1="195.4" x2="328.8" y2="310.9"/>
			<g class="work-arrow d-none fadein-4">
				<line class="st2" x1="288.1" y1="292.8" x2="220.1" y2="224.8"/>
				<polygon class="st3" points="226,223.7 209.4,214.1 219,230.7 			"/>
			</g>
		</svg>
		<div class="object--circle negative negative--1">
			<div class="object-text">生への意志</div>
		</div>
		<div class="object--circle notion notion--1 d-none fadein-3">
			<div class="object-text">解脱</div>
		</div>
		<div class="object--circle ego ego--2 d-none fadein-1">
			<div class="object-text">他者</div>
		</div>
		<div class="object--circle ego ego--1">
			<div class="object-text">自分</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">世界の全ての表象の根底には、盲目的な「生への意志」が存在している。そのため争いや苦しみは永遠に続く。</span>
			<span class="single-diagram__content__text__2 animation-text">この苦しみから逃れるためには、同情することで苦しみを他人と共有するか、仏教によって解脱するべきである。</span>
		</p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<?php include("../../parts/footer.php"); ?>
