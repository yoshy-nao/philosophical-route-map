<?php include("../../parts/header.php"); ?>
<?php $link = "#life-11";?>
<style type="text/css">
	.negative--1 {
		top: 50%;
		left: 50%;
		width: 32%;
		height: 32%;
		z-index: -100;
	}
	.ego--1 {
		top: 50%;
		left: 50%;
		width: 10%;
		height: 10%;
	}
	.god--1 {
		top: 50%;
		left: 50%;
		width: 60%;
		height: 60%;
		z-index: -100;
	}
	.text--1 {
		top: 25%;
		left: 50%;
	}
	.text--2 {
		top: 60%;
		left: 50%;
	}
</style>
<script>
	setTimeout(function(){
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.fadein-1').fadeIn(5000);
			$('.single-diagram__content__text__2').addClass('is-animation-text');
			setTimeout(function(){
				$('.fadein-2').fadeIn(1000);
				$('.fadeout-1').fadeOut(3000);
			}, 5000);
		}, 5000);
	}, 1000);
</script>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<g class="work-arrow d-none fadein-2">
				<line x1="313.6" y1="260" x2="313.6" y2="194.6"/>
				<polygon points="318.4,197.9 313.6,180 308.8,197.9 			"/>
			</g>
		</svg>
		<div class="object--circle god god--1 d-none fadein-1">
		</div>
		<div class="text text--1 c-black d-none fadein-1">包括者</div>
		<div class="text text--2 c-white fadeout-1">限界状況</div>
		<div class="object--circle negative negative--1 fadeout-1">
			<div class="object-text">欲望</div>
		</div>
		<div class="object--circle ego ego--1">
			<div class="object-text">自分</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">包括者<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">カール・ヤスパース（1883-1969）</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">人が実存の状態になるのは死、罪、戦争など解決のできない限界状況に立たされたときである。</span>
			<span class="single-diagram__content__text__2 animation-text">そして、そのような状況から逃避せず、向き合うことで、現実を超えた包括者の存在に気づくことができる。自分もその永遠の存在に包まれていることを確信するとき、生き方を主体的に選択する真の実存が生まれる。</span>
		</p>

	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<?php include("../../parts/footer.php"); ?>
