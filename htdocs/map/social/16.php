<?php include("../../parts/header.php"); ?>
<?php $link = "#social-16";?>
<style type="text/css">
	.notion--1 {
		top: 50%;
		left: 32%;
		width: 22%;
		height: 22%;
	}
	.notion--2 {
		top: 50%;
		left: 68%;
		width: 22%;
		height: 22%;
		z-index: -100;
	}
	.citizen--1 {top: 50%;left: 68%;}
	.object-text--bottom {
		top : 108%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<circle class="social-area" cx="314" cy="314" r="210"/>
			<line class="connect-line connect-line--l d-none fadein-1" x1="260" y1="312.4" x2="420" y2="312.4"/>
		</svg>
		<div class="object--circle notion notion--1">
			<div class="object-text object-text--s">国家のイデオロギー装置</div>
		</div>
		<div class="object--circle notion notion--2 d-none fadein-1">
			<div class="object-text--bottom d-none fadein-1">イデオロギー</div>
		</div>
		<div class="object--circle citizen citizen--1">
			<div class="object-text">人民</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">国家のイデオロギー装置<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">ルイ・アルチュセール（1918-19090)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">軍隊や警察のような国家権力による暴力（国家の抑圧装置）をあらゆる場面で行使し、暴力によって国民を脅し続けるわけにはいかない。</span>
			<span class="single-diagram__content__text__2 animation-text">そこで、自分から体制に従う、従順な国民を作った方が都合がよい。そのために、学校やメディア、文化的制度などの国家のイデオロギー装置によって、国民の内面にイデオロギー（虚偽意識）を埋め込んでいく。</span>
		</p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
	//JavaScript
	// function linkUrlA() {
	// 	location.href = '/history/5.php'
	// }
	// var button = $('#button-1');
	// button.click(function(){
	// 	$('.fadeout').fadeOut();
	// 	setTimeout(linkUrlA, 1500);
	// });
	setTimeout(function(){
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.fadein-1').fadeIn(1000);
			$('.single-diagram__content__text__2').addClass('is-animation-text');
		}, 3000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
