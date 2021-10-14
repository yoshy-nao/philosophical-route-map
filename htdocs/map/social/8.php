<?php include("../../parts/header.php"); ?>
<?php $link = "#social-8";?>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<circle class="social-area" cx="314" cy="420" r="150"/>
			<g class="d-none fadein-3">
				<line class="connect-line connect-line--l" x1="314" y1="370" x2="314" y2="120"/>
			</g>
		</svg>
		<div class="object--circle notion notion--2">
			<div class="object-text">市場</div>
		</div>
		<div class="object--circle notion notion--1 d-none fadein-2">
			<div class="object-text">神の見えざる手</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">自由放任主義<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">アダム・スミス（1723-1790)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">市場に公的機関が介入するべきではない。</span>
			<span class="single-diagram__content__text__2 animation-text">自由な経済競争下では個人が自分の利益を追求すると、神の見えざる手に導かれ、結果的に社会全体の利益に繋がる。</span>
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
			$('.fadein-2').fadeIn(1000);
			$('.single-diagram__content__text__2').addClass('is-animation-text');
			setTimeout(function(){
				$('.fadein-3').fadeIn(1000);
			}, 1500);
		}, 3000);
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
	.notion--2 {
		width: 30%;
		height: 30%;
		top: 67%;
		left: 50%;
		z-index: 100;
	}
</style>
<?php include("../../parts/footer.php"); ?>
