<?php include("../../parts/header.php"); ?>
<?php $link = "#world-7";?>
<style>
	.box {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 30%;
		height: 30%;
	}
	.rotate {
		transition: all 1s;
		width: 100%;
		height: 100%;
	}
	.rotate2 {
		transition: all 1s;
		width: 100%;
		height: 100%;
	}
	.element {
		position: absolute;
		width: 50%;
		height: 50%;
		border-radius: 50%;
		background-color: skyblue;
		transition: all 1s;
	}
	.object--circle {
		width: 50%;
		height: 50%;
		transition: all 1s;
	}
	.circle--1 {
		top: 0;
		left: 0;
		transform: translate(-90%, -90%);
		background-color: #61C9E5;
	}
	.circle--2 {
		top: 0;
		left: 50%;
		transform: translate(90%, -90%);
		background-color: #D89E50;
	}
	.circle--3 {
		top: 50%;
		left: 0;
		transform: translate(-90%, 90%);
		background-color: #DB619E;
	}
	.circle--4 {
		top: 50%;
		left: 50%;
		transform: translate(90%, 90%);
		background-color: #60B28B;
	}
	.thing--1 {
		width: 30%;
		height: 30%;
		top: 50%;
		left: 50%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
		</svg>
		<div class="box">
			<div class="rotate">
				<div class="object--circle circle--1"><div class="object-text c-black">水</div></div>
				<div class="object--circle circle--2"><div class="object-text c-black">地</div></div>
				<div class="object--circle circle--3"><div class="object-text c-black">火</div></div>
				<div class="object--circle circle--4"><div class="object-text c-black">風</div></div>
			</div>
		</div>
		<div class="object--square thing thing--1 d-none fadein-3"><div class="object-text">万物</div></div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">四大元素論<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">エンペドクレス(B.C.490-B.C.430)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">多様な物質の生滅は地・水・火・風という4種類の元素が結合・分離することによって起こる。</span></p>

	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
	setTimeout(function(){
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		$('.object--circle').css('transform', 'translate(0, 0)');
		$('.rotate').css('transform', 'rotate(720deg)');
		$('.box').fadeOut(2000);
		$('.fadein-3').fadeIn(3000);
	}, 3000);
</script>
<?php include("../../parts/footer.php"); ?>
