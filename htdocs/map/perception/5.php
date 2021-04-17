<?php include("../../parts/header.php"); ?>
<?php $link = "#perception-5";?>
<style>
	.ego--1 {
		top: 50%;
		left: 35%;
		width: 55%;
		height: 45%;
		z-index: -1000;
	}
	.ego--2 {
		top: 50%;
		left: 27%;
		width: 30%;
		height: 30%;
		background-color: white;
	}
	.ego--3 {
		top: 50%;
		left: 48%;
		width: 15%;
		height: 15%;
		border: 1px dashed #222;
	}
	.thing--1 {
		top: 50%;
		left: 27%;
		width: 13%;
		height: 13%;
	}
	.text--1 {
		top: 45%;
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
	<!-- タイトル -->
	<h2 class="single-diagram__title ">超越論的観念論<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">イマヌエル・カント（1724-1804)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<line class="line--perception len len--1" x1="458" y1="314.8" x2="306" y2="314.8"/>
		</svg>
		<div class="object--square thing thing--2">
			<div class="object-text c-white">物自体</div>
		</div>
		<div class="object--circle ego ego--1">
			<div class="object-text--bottom">主観</div>
		</div>
		<div class="object--circle ego--2">
		</div>
		<div class="object--circle ego ego--3">
			<div class="object-text">悟性</div>
		</div>
		<div class="object--square thing--1 scale-box">
			<div class="thing scale-box__element">
				<div class="object-text c-black">表象</div>
			</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">客観の存在は認めてた上で、それが実際にどのような姿をしているかは正確には認識できないが、人間は特有の時間や空間を捉える枠組みによって認識することはできる。</span>
			<span class="single-diagram__content__text__2 animation-text">枠組みによって認識されたものは、人間が共通して持っている感覚である「悟性」によって意識の中に「表象」として再構成される。</span></p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
	setTimeout(function(){
		$('.len--1').addClass('line-effect--2');
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.single-diagram__content__text__2').addClass('is-animation-text');
			$('.scale-box__element').css('transform', 'scale(1)');
		}, 4000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
