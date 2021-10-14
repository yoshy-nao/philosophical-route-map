<?php include("../../parts/header.php"); ?>
<?php $link = "#causality-4";?>
<style>
	.ego--1 {
		top: 37%;
		left: 50%;
		width: 55%;
		height: 45%;
		z-index: -1000;
	}
	.ego--2 {
		top: 33%;
		left: 50%;
		width: 40%;
		height: 30%;
		background-color: white;
		z-index: -1000;
	}
	.ego--3 {
		top: 50%;
		left: 50%;
		width: 15%;
		height: 15%;
		border: 1px dashed #222;
	}
	.notion {
		background: none;
		border-color: #222;
		border-radius: 50%;
	}
	.notion--1 {
		top: 32%;
		left: 40%;
		width: 13%;
		height: 13%;
	}
	.notion--2 {
		top: 32%;
		left: 60%;
		width: 13%;
		height: 13%;
	}
	.notion--3 {
		top: 80%;
		left: 50%;
		background: #222;
		border-color: #D3D4D3;
	}
	.text--1 {
		top: 11%;
		left: 49%;
	}
	.thing--2 {
		height: 20%;
		width: 20%;
		top: 50%;
		left: 82%;
		background-color: #222;
		border: 1px dashed #CCC;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<line class="line--perception len len--1" x1="313.6" y1="270" x2="313.6" y2="511.4"/>
			<polygon class="creation-arrow--b d-none fadein-2" points="319.8,202.2 307.3,195.3 307.3,209 "/>
		</svg>
		<div class="object--circle ego ego--1">
		</div>
		<div class="object--circle ego--2">
		</div>
		<div class="object--circle ego ego--3">
			<div class="object-text">悟性</div>
		</div>
		<div class="object--square notion--1 scale-box">
			<div class="notion scale-box__element">
				<div class="object-text c-black">原因</div>
			</div>
		</div>
		<div class="object--square notion--2 scale-box">
			<div class="notion scale-box__element">
				<div class="object-text c-black">結果</div>
			</div>
		</div>
		<div class="object--circle notion notion--3">
			<div class="object-text">事象</div>
		</div>
		<div class="text text--1">人間</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">悟性<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">イマヌエル・カント（1724-1804)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">因果律は単なる習慣ではなく、人間に共通して先天的（ア・プリオリ）に備わっている「悟性」という感覚によって認識可能である。</span>
		</p>

	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
	setTimeout(function(){
		$('.len--1').addClass('line-effect--3');
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.notion--1').find('.scale-box__element').css('transform', 'scale(1)');
			setTimeout(function(){
				$('.fadein-2').fadeIn(1000);
				setTimeout(function(){
					$('.notion--2').find('.scale-box__element').css('transform', 'scale(1)');
				}, 1000);
			}, 1000);
		}, 2000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
