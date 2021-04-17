<?php include("../../parts/header.php"); ?>
<?php $link = "#life-13";?>
<style type="text/css">
	.ego--1 {
		top: 10%;
		left: 50%;
		width: 30%;
		height: 30%;
	}
	.notion--1 {
		top: 50%;
		left: 50%;
		width: 50%;
		height: 50%;
	}
</style>
<script>
	$(function(){
		setTimeout(function(){
			$('.single-diagram__content__text__1').addClass('is-animation-text');
			setTimeout(function(){
				$('.fadein-1').fadeIn(2500);
				anime({
					targets: '.ego--1',
					top: '50%',
					easing: 'easeInOutCubic',
					duration: 2500
				});
				setTimeout(function(){
					$('.single-diagram__content__text__2').addClass('is-animation-text');
					anime({
						targets: '.notion--1',
						background: '#EA60BC',
						easibong: 'easeInOutCubic',
						duration: 2000
					});
					$('.notion--1').css('border', 'none');
				}, 2000);
			}, 3000);
		}, 1000);
	});
</script>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">実存<br><a href="http://localhost/#life-13" class="single-diagram__subtitle">ジャン＝ポール・サルトル（1906-1995）</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
		</svg>
		<div class="object--circle notion notion--1">
			<div class="object-text">実存</div>
			<div class="object-text--bottom">自分</div>
		</div>
		<div class="object--circle ego ego--1 d-none fadein-1">
			<div class="object-text">本質</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">「実存は本質に先立つ」人間はまずこの世に存在する。</span>
			<span class="single-diagram__content__text__2 animation-text">そして、その後の行動によって本質が決まる。つまり、人間はどんな時も根本的に自由であり、自分の責任で何かを選択しなければならない。</span>
		</p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<?php include("../../parts/footer.php"); ?>
