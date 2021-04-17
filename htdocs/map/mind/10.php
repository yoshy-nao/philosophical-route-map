<?php include("../../parts/header.php"); ?>
<?php $link = "#mind-10";?>
<style>
	.ego--1 {
		top: 50%;
		left: 50%;
		width: 20%;
		height: 20%;
	}
	.scale-box__element {
		border-radius: 50%;
	}
	.structure {
		top: 50%;
		left: 50%;
		width: 70%;
		height: 70%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">構造主義<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">クロード・レヴィ＝ストロース(1908-2009)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<g class="creation-arrow d-none fadein-1">
				<polygon points="445.5,315.2 461.5,323.2 461.5,307.2 "/>
				<polygon points="182.5,312.8 166.5,304.8 166.5,320.8 "/>
				<polygon points="312.8,445.5 304.8,461.5 320.8,461.5 "/>
				<polygon points="315.2,182.5 323.2,166.5 307.2,166.5 "/>
			</g>
		</svg>
		<div class="object--circle ego--1 scale-box">
			<div class="ego scale-box__element">
				<div class="object-text">意識</div>
			</div>
		</div>
		<div class="object--circle structure">
			<div class="object-text--bottom">構造</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">個人の意識よりも先に、社会などの構造が先にある。</span><span class="single-diagram__content__text__2 animation-text">そして、個人の意識は社会の構造によって形作られており、無意識のうちに構造によって行動は規定されている。</span></p>

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
		setTimeout(function(){
			$('.scale-box__element').css('transform', 'scale(1)');
			$('.single-diagram__content__text__2').addClass('is-animation-text');
		}, 2000);
	}, 4000);
}, 1000);
	//JavaScript
	// function linkUrlA() {
	// 	location.href = '/history/5.php'
	// }
	// var button = $('#button-1');
	// button.click(function(){
	// 	$('.fadeout').fadeOut();
	// 	setTimeout(linkUrlA, 1500);
	// });
</script>
<?php include("../../parts/footer.php"); ?>
