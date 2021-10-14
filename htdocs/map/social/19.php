<?php include("../../parts/header.php"); ?>
<?php $link = "#social-19";?>
<style type="text/css">
	.citizen--1 {top: 58%;left: 65%;}
	.citizen--2 {top: 58%;left: 35%;}
	.text--1 { top: 42%; left: 38%;}
	.text--2 { top: 54%; left: 50%;}
	.text--3 { top: 75%; left: 50%;}
	.notion--1 {
		width: 10%;
		height: 10%;
		top: 32%;
		left: 50%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<circle class="social-area" cx="314" cy="314" r="210"/>
			<line class="connect-line connect-line--m fadeout-1" x1="323.7" y1="187.9" x2="219.8" y2="367.9"/>
			<g class="work-arrow d-none fadein-2">
				<line x1="272" y1="364" x2="342.8" y2="364"/>
				<polygon points="339.8,368.3 356,364 339.8,359.6 			"/>
			</g>
		</svg>
		<div class="object--circle citizen citizen--2">
			<div class="object-text">人民</div>
		</div>
		<div class="object--circle citizen citizen--1 d-none fadein-1">
			<div class="object-text">人民</div>
		</div>
		<div class="object--circle notion notion--1">
			<div class="object-text">法</div>
		</div>
		<div class="text text--1 fadeout-1">正義</div>
		<div class="text text--2 d-none fadein-3">贈与</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">法の脱構築<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">ジャック・デリダ（1930-2004)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">法は根拠をそのもののうちに持つことができず、その外部に根拠を持たざるを得ないので、それは正義の最終的な根拠とは言えない。このように、法の絶対性を突き崩す思考作業は「法の脱構築」と呼ぶ。</span>
			<span class="single-diagram__content__text__2 animation-text">そして、法に先立つ根拠としての正義は、他者への配慮にある。法を超えた他者への絶対的義務、見返りを持たない贈与こそが正義である。</span>
		</p>

	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
	setTimeout(function(){
		$('.fadeout-1').fadeOut(1000);
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.fadein-1').fadeIn(1000);
			setTimeout(function(){
				$('.fadein-2').fadeIn(1000);
				$('.single-diagram__content__text__2').addClass('is-animation-text');
				setTimeout(function(){
					$('.fadein-3').fadeIn(1000);
				}, 1000);
			}, 2000);
		}, 3000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
