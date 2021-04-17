<?php include("../../parts/header.php"); ?>
<?php $link = "#life-6";?>
<style type="text/css">
	.negative--1 {
		top: 58%;
		left: 20%;
		width: 15%;
		height: 15%;
	}
	.ego--1 {
		top: 58%;
		left: 20%;
		width: 10%;
		height: 10%;
	}
	.notion--1 {
		top: 37%;
		left: 62%;
		width: 12%;
		height: 12%;
	}
	.notion--2 {
		top: 58%;
		left: 62%;
		width: 20%;
		height: 20%;
		z-index: -1000;
	}
	.world--1 {
		top: 50%;
		left: 62%;
		width: 53%;
		height: 53%;
	}
	.god--1 {
		width: 15%;
		height: 15%;
		top: 20%;
		left: 62%;
	}
	.object-text--bottom--b {
		top: 110%;
	}
</style>
<script>
	setTimeout(function(){
		anime({
		  targets: '.ego--1',
		  left: '62%',
		  easing: 'easeInOutCubic',
			duration: 1000
		});
		$('.single-diagram__content__text__1').addClass('is-animation-text');
			setTimeout(function(){
				$('.single-diagram__content__text__2').addClass('is-animation-text');
				$('.fadein-5').fadeIn(1000);
				setTimeout(function(){
					$('.fadein-7').fadeIn(1000);
				}, 2000);
		}, 3000);
	}, 1000);
</script>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">アパテイア<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">ゼノン（B.C.335-B.C.263）</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<line class="connect-line connect-line--l d-none fadein-5" x1="388.5" y1="350" x2="388.5" y2="250"/>
		</svg>
		<div class="object--circle god--world world--1">
			<div class="object-text--bottom">自然</div>
		</div>
		<div class="object--circle notion notion--2 d-none fadein-7">
			<div class="object-text--bottom object-text--bottom--b">アパテイア</div>
		</div>
		<div class="object--circle negative negative--1">
			<div class="object-text">欲望</div>
		</div>
		<div class="object--circle ego ego--1">
			<div class="object-text">自分</div>
		</div>
		<div class="object--circle notion notion--1 d-none fadein-5">
			<div class="object-text">徳</div>
		</div>
		<div class="object--circle god god--1">
			<div class="object-text">神</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">富や名誉といった人間の欲望や感情に起因するものに執着するのは、神々の摂理（ロゴス）に背く態度である。従って、欲望を理性で制限し禁欲的に生きる。</span>
			<span class="single-diagram__content__text__2 animation-text">そして、徳を追求し実践することによって、自然と調和できるようになり、欲望から解き放たれた境地であるアパテイアに到達することができる。</span>
		</p>

	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<?php include("../../parts/footer.php"); ?>
