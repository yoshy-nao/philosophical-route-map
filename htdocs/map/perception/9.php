<?php include("../../parts/header.php"); ?>
<?php $link = "#perception-9";?>
<style>
	.ego--1 {
		top: 30%;
		left: 30%;
		width: 28%;
		height: 28%;
		z-index: -1000;
	}
	.ego--2 {
		top: 30%;
		left: 30%;
		background-color: white;
		z-index: -1000;
	}
	.ego--3 {
		top: 70%;
		left: 30%;
		width: 28%;
		height: 28%;
		z-index: -1000;
	}
	.ego--4 {
		top: 70%;
		left: 30%;
		background-color: white;
		z-index: -1000;
	}
	.thing {
		border-radius: 30%;
	}
	.thing--1 {
		top: 30%;
		left: 30%;
		width: 13%;
		height: 13%;
	}
	.thing--2 {
		top: 70%;
		left: 30%;
		width: 13%;
		height: 13%;
	}
	.text--1 {
		top: 50%;
		left: 23%;
	}
	.thing--3 {
		top: 50%;
		left: 70%;
		background-color: #222;
		border: 1px dashed #CCC;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">現象学的還元<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">エトムント・フッサール(1859-1938)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<line class="connect-line connect-line--l d-none fadein-3" x1="188.4" y1="181.9" x2="188.4" y2="434.4"/>
		</svg>
		<div class="object--circle ego ego--1">
			<div class="object-text--top">自我</div>
		</div>
		<div class="object--circle ego--2"></div>
		<div class="object--square thing--2 scale-box d-none fadein-2">
			<div class="thing scale-box__element">
			</div>
		</div>
		<div class="object--circle ego ego--3 d-none fadein-2">
			<div class="object-text--bottom">他我</div>
		</div>
		<div class="object--circle ego--4 d-none fadein-2"></div>
		<div class="object--square thing--1 scale-box">
			<div class="thing scale-box__element">
			</div>
		</div>
		<div class="object--square thing thing--3">
			<div class="object-text d-none fadein-1 c-white">エポケー</div>
			<div class="object-text--bottom">客観</div>
		</div>
		<div class="text text--1 d-none fadein-3">一致</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">まず、主観の外側にある客観的世界が実在するということは証明できないので、判断停止（エポケー）する。</span>
			<span class="single-diagram__content__text__2 animation-text">しかし、ものを見ている自我の存在は確認できる。</span>
			<span class="single-diagram__content__text__3 animation-text">そして、自分の自我と他人の自我（他我）が同じものを認識しており、対象物が一致しているときに、初めて客観的世界の実在を確信できる（現象学的還元）。</span>
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
			$('.single-diagram__content__text__2').addClass('is-animation-text');
			setTimeout(function(){
				$('.fadein-2').fadeIn(1000);
				setTimeout(function(){
					$('.fadein-3').fadeIn(1000);
					$('.single-diagram__content__text__3').addClass('is-animation-text');
				}, 3000);
			}, 3000);
		}, 3000);
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
