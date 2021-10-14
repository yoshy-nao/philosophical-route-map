<?php include("../../parts/header.php"); ?>
<?php $link = "#lang-1";?>
<style>
	.ego--1 {
		top: 50%;
		left: 30%;
		width: 30%;
		height: 30%;
		z-index: -10000;
	}
	.notion--1 {
		top: 50%;
		left: 30%;
		width: 20%;
		height: 20%;
		background-color: #EA60BC;
	}
	.thing--1 {
		top: 50%;
		left: 75%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<line class="connect-line connect-line--l d-none fadein-2" x1="225.7" y1="314.2" x2="500.7" y2="314.2"/>
		</svg>
		<div class="object--circle ego ego--1">
			<div class="object-text object-text--bottom c-white">人間</div>
		</div>
		<div class="object--circle notion notion--b notion--1 d-none fadein-1">
			<div class="object-text c-black">名前</div>
		</div>
		<div class="thing thing--1"><div class="object-text c-black">個物</div></div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">ノミナリズム<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">ウィリアムオッカム(1285-1347)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">世界には個物だけが存在し、類・種などの普遍は存在しない。</span>
			<span class="single-diagram__content__text__2 animation-text">これらは人間の精神の中で概念（名前）としてのみ存在する（唯名論、ノミナリズム）。</span>
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
				$('.fadein-2').fadeIn(1000);
			}, 1000);
		}, 5000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
