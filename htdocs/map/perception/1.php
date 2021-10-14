<?php include("../../parts/header.php"); ?>
<?php $link = "#perception-1";?>
<style>
	.ego--1 {
		top: 50%;
		left: 25%;
		width: 28%;
		height: 28%;
		z-index: -1000;
	}
	.ego--2 {
		top: 50%;
		left: 25%;
	}
	.scale-box__element {
		border: 1px dashed #222;
		border-radius: 50%;
	}
	.thing--1 {
		top: 50%;
		left: 75%;
		width: 28%;
		height: 28%;
	}
	.text--1 {
		top: 45%;
		left: 49%;
	}
	.god--1 {
		top: 19%;
		left: 25%;
		width: 15%;
		height: 15%;
	}
	.animation-line {
		stroke: red;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<line class="line--perception len len--1" x1="191" y1="314" x2="466" y2="314"/>
			<polygon class="creation-arrow d-none fadein-2" points="156,202.5 164.1,187.8 147.9,187.8 "/>
		</svg>
		<div class="object--circle god god--1 d-none fadein-1">
			<div class="object-text">神</div>
		</div>
		<div class="object--circle ego ego--1">
			<div class="object-text--bottom">主観</div>
		</div>
		<div class="object--circle ego--2 scale-box">
			<div class="ego scale-box__element">
				<div class="object-text">生得観念</div>
			</div>
		</div>
		<div class="object--square thing thing--1">
			<div class="object-text--bottom">客観</div>
		</div>
		<div class="text text--1 d-none fadein-3">一致</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">生得観念<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">ルネ・デカルト(1596-1650)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">世界は認識するもの（主観）と認識されるもの（客観）に分類される。</span>
			<span class="single-diagram__content__text__2 animation-text">そして、主観には全知全能な神によって与えられた、物事を正しく認識する能力（生得観念）がある。</span>
			<span class="single-diagram__content__text__3 animation-text">それによって人間は、神が作った世界と自らの主観の世界を一致させることができる。</span>
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
			setTimeout(function(){
				$('.scale-box__element').css('transform', 'scale(1)');
				setTimeout(function(){
					$('.len--1').addClass('line-effect--2');
					setTimeout(function(){
						$('.fadein-3').fadeIn(1000);
						$('.single-diagram__content__text__3').addClass('is-animation-text');
					},2000);
				},3000);
			}, 1500);
		}, 1000);
	}, 4000);
}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
