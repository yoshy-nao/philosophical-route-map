<?php include("../../parts/header.php"); ?>
<?php $link = "#lang-4";?>
<style>
	.notion--lang {
		width: 22%;
		height: 22%;
	}
	.lang--1 {
		top: 50%;
		left: 30%;
	}
	.lang--2 {
		top: 50%;
		left: 70%;
	}
	.text--1 {
		top: 45%;
		left: 50%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<line class="connect-line connect-line--l" x1="225.7" y1="314.2" x2="500.7" y2="314.2"/>
		</svg>
		<div class="object--circle notion--lang lang--1">
			<div class="object-text">言葉</div>
		</div>
		<div class="object--circle notion--lang lang--2">
			<div class="object-text">言葉</div>
		</div>
		<div class="text text--1 d-none fadein-1">関係性</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">記述理論<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">バートランド・ラッセル（1872-1970）</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">そのままでは真偽が問えない文章や命題について、それを構成する言葉の関係性を明らかにすることで、論理学的に扱うことを可能にする。</span>
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
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
