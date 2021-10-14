<?php include("../../parts/header.php"); ?>
<?php $link = "#life-1";?>
<style type="text/css">
	.negative--1 {
		top: 50%;
		left: 25%;
		width: 20%;
		height: 20%;
	}
	.ego--1 {
		top: 70%;
		left: 50%;
		width: 15%;
		height: 15%;
	}
	.notion--1 {
		top: 70%;
		left: 50%;
		width: 25%;
		height: 25%;
	}
	.notion--2 {
		top: 25%;
		left: 50%;
		width: 20%;
		height: 20%;
	}
	.object-text--bottom {
		top: 108%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg class="object-svg" width="628" height="628" viewBox="0 0 628 628">
			<line class="connect-line connect-line--l d-none fadein-4" x1="314" y1="130.6" x2="314" y2="400"/>
		</svg>
		<div class="object--circle notion notion--1 d-none fadein-1">
			<div class="object-text--bottom d-none fadein-2">知恵</div>
		</div>
		<div class="object--circle ego ego--1">
			<div class="object-text">自分</div>
		</div>
		<div class="object--circle notion notion--2 d-none fadein-3">
			<div class="object-text">アレテー</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">魂への配慮<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">ソクラテス（B.C.470-399)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">自分の心や魂に目を向け、自らの無知を自覚することで、真の知に近づくことができる。そして、真の知を求め、愛することによって、より善く生きることができる。</span>
			<span class="single-diagram__content__text__2 animation-text">このような「魂への配慮」を実践し、知恵によって魂に徳（アレテー）を持たせるべきである。</span>
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
		$('.fadein-2').fadeIn(1000);
		setTimeout(function(){
			$('.fadein-3').fadeIn(1000);
			setTimeout(function(){
				$('.fadein-4').fadeIn(1000);
				$('.single-diagram__content__text__2').addClass('is-animation-text');
			}, 2000);
		}, 4000);
	}, 1000);
}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
