<?php include("../../parts/header.php"); ?>
<?php $link = "#world-8";?>
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
		background: #CCC;
	}
	.circle--1 {
		top: 0;
		left: 0;
		transform: translate(-90%, -90%);
	}
	.circle--2 {
		top: 0;
		left: 50%;
		transform: translate(90%, -90%);
	}
	.circle--3 {
		top: 50%;
		left: 0;
		transform: translate(-90%, 90%);
	}
	.circle--4 {
		top: 50%;
		left: 50%;
		transform: translate(90%, 90%);
	}
	.thing--1 {
		width: 30%;
		height: 30%;
		top: 50%;
		left: 50%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">原子論<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">デモクリトス(B.C.460-B.C.370)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
		</svg>
		<div class="box">
			<div class="rotate">
				<div class="object--circle circle--1"><div class="object-text c-black">原子</div></div>
				<div class="object--circle circle--2"><div class="object-text c-black">原子</div></div>
				<div class="object--circle circle--3"><div class="object-text c-black">原子</div></div>
				<div class="object--circle circle--4"><div class="object-text c-black">原子</div></div>
			</div>
		</div>
		<div class="object--square thing thing--1 d-none fadein-3"><div class="object-text">万物</div></div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">万物は、それ以上分割できない原子（アトム）からできており、これらが結合したり分離することによって、多様な物質が生成したり消滅するように見える。</span>
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
		$('.object--circle').css('transform', 'translate(0, 0)');
		$('.rotate').css('transform', 'rotate(720deg)');
		$('.box').fadeOut(2000);
		$('.fadein-3').fadeIn(3000);
	}, 3000);
</script>
<?php include("../../parts/footer.php"); ?>
