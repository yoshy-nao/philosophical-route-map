<?php include("../../parts/header.php"); ?>
<?php $link = "#world-6";?>
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
		background: #CCC;
	}
	.circle--1 {
		top: 0;
		left: 0;
		transform: translate(-90%, -90%);
		transition: all 1s;
	}
	.circle--2 {
		top: 0;
		left: 50%;
		transform: translate(90%, -90%);
		transition: all 1s;
	}
	.circle--3 {
		top: 50%;
		left: 0;
		transform: translate(-90%, 90%);
		transition: all 1s;
	}
	.circle--4 {
		top: 50%;
		left: 50%;
		transform: translate(90%, 90%);
		transition: all 1s;
	}
	.thing--1 {
		width: 30%;
		height: 30%;
		top: 50%;
		left: 50%;
	}
	.circle--5 {
		top: 50%;
		left: 50%;
		width: 60%;
		height: 60%;
		border: 2px solid #ff0;
		background: none;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
		</svg>
		<div class="object--circle circle--5 d-none fadein-1 fadeout-1"><div class="object-text">ヌース</div></div>
		<div class="box">
			<div class="rotate">
				<div class="object--circle circle--1 rotate__element"><div class="object-text c-black">スペルマタ</div></div>
				<div class="object--circle circle--2 rotate__element"><div class="object-text c-black">スペルマタ</div></div>
				<div class="object--circle circle--3 rotate__element"><div class="object-text c-black">スペルマタ</div></div>
				<div class="object--circle circle--4 rotate__element"><div class="object-text c-black">スペルマタ</div></div>
			</div>
		</div>
		<div class="object--square thing thing--1 d-none fadein-3"><div class="object-text">万物</div></div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">スペルマタ<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">アナクサゴラス(B.C.500-B.C.428)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">あらゆるものに変化しうる粒子を「万物の種子（スペルマタ）」と呼び、これが万物の原理である。</span><span class="single-diagram__content__text__2 animation-text">また、この無数の種子に運動をもたらす原理として「ヌース（知性）」というものがある。</span><span class="single-diagram__content__text__3 animation-text">そして、全ての種子の混沌とした集まりだった宇宙にヌースが働いたことで現在のような秩序が生まれた。</span></p>
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
		$('.fadein-1').fadeIn(3000);
		$('.single-diagram__content__text__2').addClass('is-animation-text');
		setTimeout(function(){
			$('.rotate__element').css('transform', 'translate(0, 0)');
			$('.rotate').css('transform', 'rotate(720deg)');
			$('.box').fadeOut(2000);
			$('.fadein-3').fadeIn(3000);
			$('.fadeout-1').fadeOut(1000);
			$('.single-diagram__content__text__3').addClass('is-animation-text');
		}, 5000);
	}, 5000);
}, 2000);
</script>
<?php include("../../parts/footer.php"); ?>
