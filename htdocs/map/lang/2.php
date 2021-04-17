<?php include("../../parts/header.php"); ?>
<?php $link = "#lang-2";?>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">記号論<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">チャールズ・サンダース・パース（1839-1914）</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<line class="line--perception len len--1" x1="314" y1="120" x2="314" y2="370"/>
		</svg>
		<div class="object--circle ego ego--1">
			<div class="object-text--bottom">人間</div>
		</div>
		<div class="object--circle ego ego--2 d-none fadein-3">
			<div class="object-text">記号</div>
		</div>
		<div class="object--circle notion notion--1 d-none fadein-1">
			<div class="object-text">思考</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">人間の思考は常に記号（言語）によって媒介されている。記号の意味は時間と共に変化し続け、その影響を受けた人間も変化する。</span>
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
			$('.len--1').addClass('line-effect--2');
			setTimeout(function(){
				$('.fadein-3').fadeIn(1000);
			}, 500);
		}, 2000);
	}, 1000);
</script>
<style>
	.citizen--1 {
		top: 67%;
		left: 50%;
	}
	.word--1 {
		top: 86%;
		left: 50%;
	}
	.notion {
		top: 20%;
		left: 50%;
	}
	.ego--1 {
		width: 30%;
		height: 30%;
		top: 67%;
		left: 50%;
		z-index: -100;
	}
	.ego--2 {
		width: 15%;
		height: 15%;
		top: 54%;
		left: 50%;
		border: 1px dashed #222;
	}
</style>
<?php include("../../parts/footer.php"); ?>
