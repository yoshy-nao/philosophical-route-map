<?php include("../../parts/header.php"); ?>
<?php $link = "#world-16";?>
<style>
	.god--1 {
		top: 50%;
		left: 50%;
		width: 50%;
		height: 50%;
	}
	.thing--1 {
		transform: translate(-50%, -50%);
		top: 50%;
		left: 50%;
		width: 20%;
		height: 20%;
	}
	.thing {
		border: 1px dashed #222;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">一元論<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">バールーフ・デ・スピノザ（1632-1677)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
		</svg>
		<div class="object--circle god god--1">
			<div class="object-text--bottom c-white">神</div>
		</div>
		<div class="thing--1 scale-box">
			<div class="scale-box__element thing b-none">
				<div class="object-text c-black d-none fadein-1">万物</div>
			</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">神（自然）が唯一の実体であり、この世界には神しか存在していない。</span><span class="single-diagram__content__text__2 animation-text">つまり、すべては神の中にあり、神が姿を変えたものによって構成されている。精神も物質もすべて同じ神が姿を変えたものであり、全ては区別されないものである。</span></p>

	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
$(function(){
	setTimeout(function(){
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.scale-box__element').css('transform', 'scale(1)');
			$('.single-diagram__content__text__2').addClass('is-animation-text');
			setTimeout(function(){
				$('.fadein-1').fadeIn(1000);
			}, 1000);
		}, 3000);
	}, 1000);
});
</script>
<?php include("../../parts/footer.php"); ?>
