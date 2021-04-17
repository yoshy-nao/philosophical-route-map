<?php include("../../parts/header.php"); ?>
<?php $link = "#world-10";?>
<style>
	.box {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 30%;
		height: 30%;
	}
	.box--2 {
		width: 20%;
		height: 20%;
	}
	.rotate {
		transition: all 1s;
		width: 100%;
		height: 100%;
		/* transform-origin: center; */
		transform: rotate(45deg);
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
	.circle--5 {
		top: 0;
		left: 0;
		transform: translate(-100%, -100%);
	}
	.circle--6 {
		top: 0;
		left: 50%;
		transform: translate(100%, -100%);
	}
	.circle--7 {
		top: 50%;
		left: 50%;
		transform: translate(100%, 100%);
	}
	.circle--8 {
		top: 50%;
		left: 0;
		transform: translate(-100%, 100%);
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
	<h2 class="single-diagram__title ">四性質説<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">アリストテレス(B.C.384-B.C.322)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<rect class="connect-line connect-line--l d-none fadein-1 fadeout-1" x="179" y="179" width="270" height="270" />
		</svg>
		<div class="box fadeout-2">
			<div class="object--circle circle--1"><div class="object-text c-black">水</div></div>
			<div class="object--circle circle--2"><div class="object-text c-black">地</div></div>
			<div class="object--circle circle--3"><div class="object-text c-black">火</div></div>
			<div class="object--circle circle--4"><div class="object-text c-black">風</div></div>
		</div>
		<div class="box box--2 d-none fadein-2">
			<div class="rotate">
				<div class="object--circle circle--5 abstract notion"><div class="object-text object-text--rotate">冷</div></div>
				<div class="object--circle circle--6 abstract notion"><div class="object-text object-text--rotate">湿</div></div>
				<div class="object--circle circle--7 abstract notion"><div class="object-text object-text--rotate">熱</div></div>
				<div class="object--circle circle--8 abstract notion"><div class="object-text object-text--rotate">乾</div></div>
			</div>
		</div>
		<div class="object--square thing thing--1 d-none fadein-3"><div class="object-text">万物</div></div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">エンペクドクレスの四大元素論を認めた上で、まず4つの元素を構成要素として4つの性質が生まれる。</span><span class="single-diagram__content__text__2 animation-text">そして、その4つの性質から万物が生成される。</span></p>
		<!-- <div id="button-1" class="single-diagram__content__button">四大元素論 <i class="fas fa-angle-double-right"></i></div> -->
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
			$('.fadein-2').fadeIn(1000);
			setTimeout(function(){
				$('.fadeout-1').fadeOut(1500);
				setTimeout(function(){
					$('.rotate').css('transform', 'rotate(405deg)');
					$('.abstract').css('transform', 'translate(0, 0)');
					$('.fadein-3').fadeIn(2000);
					$('.fadeout-2').fadeOut(1500);
					$('.single-diagram__content__text__2').addClass('is-animation-text');
				}, 1500);
			}, 1500);
		}, 2000);
	}, 1500);
	JavaScript
	function linkUrlA() {
		location.href = '/history/5.php'
	}
	var button = $('#button-1');
	button.click(function(){
		$('.fadeout').fadeOut();
		setTimeout(linkUrlA, 1500);
	});
</script>
<?php include("../../parts/footer.php"); ?>
