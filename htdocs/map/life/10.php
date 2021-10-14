<?php include("../../parts/header.php"); ?>
<?php $link = "#life-10";?>
<style type="text/css">
	.negative--1 {
		top: 70%;
		left: 50%;
		width: 40%;
		height: 40%;
	}
	.ego--1 {
		top: 80%;
		left: 50%;
		width: 10%;
		height: 10%;
	}
	.notion--1 {
		top: 20%;
		left: 50%;
		width: 12%;
		height: 12%;
	}
	.notion--2 {
		top: 52%;
		left: 50%;
		width: 15%;
		height: 15%;
		background: none;
	}
	.text--1 {
		top: 37%;
		left: 56%;
	}
	.rotate-box__element {
		border-radius: 50%;
	}
	.object-text--top {
		bottom: 112%;
	}
</style>
<script>
	setTimeout(function(){
	$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.ego--1').find('.object-text').text('超人');
			anime({
			  targets: '.ego--1',
			  top: '52%',
			  easing: 'spring',
				duration: 1000
			});
			anime({
				targets: '.rotate-box__element',
				rotateY: '720deg',
				background: '#EA60BC',
				easibong: 'easeInOutCubic',
				duration: 300
			});
			$('.fadein-1').fadeIn(1000);
			setTimeout(function(){
				$('.fadein-2').fadeIn(1000);
				$('.single-diagram__content__text__2').addClass('is-animation-text');
				setTimeout(function(){
					$('.fadein-3').fadeIn(1000);
				}, 2000);
			}, 2000);
		}, 3000);
	}, 1000);
</script>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<g class="work-arrow d-none fadein-3">
				<line class="st1" x1="313.6" y1="240" x2="313.6" y2="198.6"/>
				<polygon class="st2" points="318.4,201.9 313.6,184 308.8,201.9 			"/>
			</g>
		</svg>
		<div class="object--circle negative negative--1">
			<div class="object-text">ニヒリズム</div>
		</div>
		<div class="object--circle notion notion--2 d-none fadein-2">
			<div class="object-text--top">力への意志</div>
		</div>
		<div class="object--circle notion notion--1 d-none fadein-1">
			<div class="object-text">生</div>
		</div>
		<div class="object--circle ego--1 rotate-box">
			<div class="ego rotate-box__element">
				<div class="object-text">自分</div>
			</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">力への意志<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">フリードリヒ・ニーチェ（1844-1900）</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">弱者はより強いものになりたいという根源的な力への意志を抑圧し、生を否定して無を志向するニヒリズム（虚無主義）に陥る傾向にある。</span>
			<span class="single-diagram__content__text__2 animation-text">それに対して、一般的な価値基準がないことを認識しつつ「力への意志」によって生を肯定する。そして、そのような価値創造的な人間は超人と呼ばれる。</span>
		</p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<?php include("../../parts/footer.php"); ?>
