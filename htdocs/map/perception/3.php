<?php include("../../parts/header.php"); ?>
<?php $link = "#perception-3";?>
<style>
	.ego--1 {
		top: 62%;
		left: 50%;
		width: 28%;
		height: 28%;
		z-index: -1000;
	}
	.ego--2 {
		top: 62%;
		left: 50%;
		background-color: white;
	}
	.thing {
		border-radius: 30%;
	}
	.thing--1 {
		top: 62%;
		left: 50%;
		width: 13%;
		height: 13%;
	}
	.text--1 {
		top: 45%;
		left: 49%;
	}
	.god--1 {
		top: 30%;
		left: 50%;
		width: 15%;
		height: 15%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">非物質論的観念論<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">ジョージ・バークリー(1685-1753)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<polygon class="creation-arrow d-none fadein-1" points="314,273.6 323.2,256.9 304.8,256.9 "/>
		</svg>
		<div class="object--circle god god--1">
			<div class="object-text">神</div>
		</div>
		<div class="object--circle ego ego--1">
			<div class="object-text--bottom">主観</div>
		</div>
		<div class="object--circle ego--2"></div>
		<div class="object--square thing--1 scale-box">
			<div class="thing scale-box__element">
				<div class="object-text c-black">観念</div>
			</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">存在するとは知覚されることである。つまり、客観は存在せず、全ては人間の意識（主観）の中のものである。そして、我々の意識や観念は全て神が与えたものである。</span>
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
		setTimeout(function(){
			$('.scale-box__element').css('transform', 'scale(1)');
		}, 1500);
	}, 1500);
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
