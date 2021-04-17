<?php include("../../parts/header.php"); ?>
<?php $link = "#perception-11";?>
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
		background-color: white;
	}
	.thing {
		border-radius: 30%;
	}
	.thing--1 {
		top: 50%;
		left: 25%;
		width: 13%;
		height: 13%;
	}
	.text--2 {
		top: 50%;
		left: 23%;
	}
	.thing--3 {
		top: 50%;
		left: 75%;
		background-color: #222;
		border: 1px dashed #CCC;
	}
	.text--1 {
		top: 45%;
		left: 50%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">開示性<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">マルティン・ハイデガー（1889-1976）</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<line class="line--perception len len--1" x1="200" y1="314.8" x2="458" y2="314.8"/>
		</svg>
		<div class="object--circle ego ego--1">
			<div class="object-text--bottom">現存在</div>
		</div>
		<div class="object--circle ego--2"></div>
		<div class="object--square thing--1 scale-box">
			<div class="thing scale-box__element">
			</div>
		</div>
		<div class="object--square thing thing--3 d-none fadein-1">
			<div class="object-text--bottom">客観</div>
		</div>
		<div class="text text--1 d-none fadein-2">気遣い</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">客観的な世界がもともとあるのではなく、人間が認識し意味を与えることによって、その人の世界を開いている。人間は周りの事物を自らの固有の関心で捉える（気遣い）。</span>
			<span class="single-diagram__content__text__2 animation-text">それによって、自分の意識の中に生きる世界を開いている（開示性）。</span>
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
			$('.len--1').addClass('line-effect--3');
			$('.fadein-2').fadeIn(1000);
			setTimeout(function(){
				$('.scale-box__element').css('transform', 'scale(1)');
				$('.single-diagram__content__text__2').addClass('is-animation-text');
			}, 3000);
		}, 2000);
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
