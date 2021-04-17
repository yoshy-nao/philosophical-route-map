<?php include("../../parts/header.php"); ?>
<?php $link = "#world-9";?>
<style>
.thing {
	border: 1px dashed #222;
	transition: all 1s;
	width: 20%;
	height: 20%;
}
.world--1 {
	top: 30%;
	left: 50%;
	width: 45%;
	height:45%;
}
.world--2 {
	top: 70%;
	left: 50%;
	width: 45%;
	height: 45%;
}
.god--1 {
	top: 30%;
	left: 50%;
}
.thing--1 {
	top: 30%;
	left: 50%;
}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">イデア界と現象界<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">プラトン(B.C.427-B.C.347)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg id ="svg" width="628" height="628" viewBox="0 0 628 628">
		</svg>
		<div class="object--circle god--world world--1">
			<div class="object-text--top">イデア界</div>
		</div>
		<div class="object--square god god--1">
			<div class="object-text">イデア</div>
		</div>
		<div class="object--circle real-world world--2">
			<div class="object-text--bottom">現象界</div>
		</div>
		<div class="object--square thing thing--1 b-none">
			<div class="object-text fadein-1 d-none c-black">ミメーシス</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">この世界にはイデアが存在するイデア界と現実世界（現象界）がある。</span><span class="single-diagram__content__text__2 animation-text">そして、万物はイデア界にあるイデアの模造品（ミメーシス）である。したがって、物事の本質を知るためには、イデアを探求する必要がある。</span></p>

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
			$('.single-diagram__content__text__2').addClass('is-animation-text');
			setTimeout(function(){
				$('.thing--1').css('top', '70%');
				$('.thing--1').css('border', '1px dashed #D3D4D3');
				setTimeout(function(){
					$('.thing--1').css('border', 'none');
					$('.thing--1').css('background-color', '#78C1BD');
					$('.fadein-1').fadeIn(1000);
				}, 1000);
			}, 1000);
		}, 3000);
	}, 1000);
});
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
