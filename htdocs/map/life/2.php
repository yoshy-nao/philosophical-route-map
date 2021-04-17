<?php include("../../parts/header.php"); ?>
<?php $link = "#life-2";?>
<style type="text/css">
	.negative--1 {
		top: 50%;
		left: 25%;
		width: 20%;
		height: 20%;
	}
	.ego--1 {
		top: 25%;
		left: 50%;
		width: 15%;
		height: 15%;
	}
	.notion--1 {
		background: none;
		top: 70%;
		left: 50%;
		width: 25%;
		height: 25%;
	}
	.god--1 {
		top: 25%;
		left: 50%;
		width: 25%;
		height:25%;
	}
	.object-text--bottom {
		top: 108%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">エロス<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">プラトン（B.C.427-B.C.347)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg class="object-svg" width="628" height="628" viewBox="0 0 628 628">
			<g class="work-arrow d-none fadein-4">
				<line x1="314" y1="375.2" x2="314" y2="277"/>
				<polygon points="321.9,282.4 314,253 306.1,282.4"/>
			</g>
		</svg>
		<div class="object--circle god--world god--1">
			<div class="object-text">イデア</div>
		</div>
		<div class="object--circle notion notion--1 d-none fadein-1">
			<div class="object-text--bottom d-none fadein-2">エロス</div>
		</div>
		<div class="object--circle ego ego--1">
			<div class="object-text">自分</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">もともと、人間の魂はイデア界にあったが、その頃の記憶は忘れてしまった。</span><span class="single-diagram__content__text__2 animation-text">しかし、自分に欠けているものに対する衝動であるエロスを持てば、肉体の外側にあるイデアという真の世界の存在に気付くことができる。</span></p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
setTimeout(function(){
	anime({
		targets: '.ego--1',
		top: '70%',
		easing: 'easeInOutCubic',
		duration: 1500
	});
	$('.single-diagram__content__text__1').addClass('is-animation-text');
	setTimeout(function(){
		$('.fadein-1').fadeIn(1000);
		setTimeout(function(){
			$('.fadein-2').fadeIn(1000);
			setTimeout(function(){
				$('.fadein-4').fadeIn(1000);
				$('.single-diagram__content__text__2').addClass('is-animation-text');
			}, 2000);
		}, 2000);
	}, 3000);
}, 1000);
</script>
