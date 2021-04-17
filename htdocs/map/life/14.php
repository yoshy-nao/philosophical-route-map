<?php include("../../parts/header.php"); ?>
<?php $link = "#life-14";?>
<style type="text/css">
	.ego--1 {
		top: 20%;
		left: 48%;
		width: 10%;
		height: 10%;
	}
	.notion {
		width: 12%;
		height: 12%;
	}
	.notion--1 {
		top: 20%;
		left: 48%;
	}
	.notion--2 {
		top: 45%;
		left: 58%;
	}
	.notion--3 {
		top: 43%;
		left: 20%;
	}
	.notion--4 {
		top: 33%;
		left: 82%;
	}
	.notion--5 {
		top: 65%;
		left: 51%;
	}
	.notion--6 {
		top: 69%;
		left: 72%;
	}
	.notion--7 {
		top: 75%;
		left: 30%;
	}
	.text--1 {
		top: 85%;
		left: 50%;
	}
</style>
<script>
$(function(){
	setTimeout(function(){
		$('.single-diagram__content__text__1').addClass('is-animation-text');
	},1000);
	anime({
		targets: '.ego--1',
		top: [
			{ value: '45%', duration: 1000, delay: 2000 },
			{ value: '43%', duration: 1000, delay: 2000 },
			{ value: '45%', duration: 1000, delay: 2000 },
			{ value: '33%', duration: 1000, delay: 2000 },
			{ value: '45%', duration: 1000, delay: 2000 },
			{ value: '65%', duration: 1000, delay: 2000 },
			{ value: '69%', duration: 1000, delay: 2000 },
			{ value: '65%', duration: 1000, delay: 2000 },
			{ value: '45%', duration: 1000, delay: 2000 },
			{ value: '20%', duration: 1000, delay: 2000 },
		],
		left: [
			{ value: '58%', duration: 1000, delay: 2000 },
			{ value: '20%', duration: 1000, delay: 2000 },
			{ value: '58%', duration: 1000, delay: 2000 },
			{ value: '82%', duration: 1000, delay: 2000 },
			{ value: '58%', duration: 1000, delay: 2000 },
			{ value: '51%', duration: 1000, delay: 2000 },
			{ value: '72%', duration: 1000, delay: 2000 },
			{ value: '51%', duration: 1000, delay: 2000 },
			{ value: '58%', duration: 1000, delay: 2000 },
			{ value: '48%', duration: 1000, delay: 2000 },
		],
		loop: true,
		easing: 'easeInOutCubic'
	});
});
</script>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">ノマド<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">ジル・ドゥルーズ（1925-1995）</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<line class="connect-line connect-line--l" x1="443.3" y1="425.4" x2="306.2" y2="394.2"/>
			<line class="connect-line connect-line--l" x1="334.5" y1="397.9" x2="165.7" y2="484"/>
			<line class="connect-line connect-line--l" x1="368.6" y1="285.3" x2="329.2" y2="392.7"/>
			<line class="connect-line connect-line--l" x1="364.1" y1="287.8" x2="111.4" y2="272.2"/>
			<line class="connect-line connect-line--l" x1="517" y1="212.6" x2="367.9" y2="284.8"/>
			<line class="connect-line connect-line--l" x1="368.8" y1="277.9" x2="308.4" y2="150.9"/>
		</svg>
		<div class="object--circle notion notion--1"></div>
		<div class="object--circle notion notion--2"></div>
		<div class="object--circle notion notion--3"></div>
		<div class="object--circle notion notion--4"></div>
		<div class="object--circle notion notion--5"></div>
		<div class="object--circle notion notion--6"></div>
		<div class="object--circle notion notion--7"></div>
		<div class="object--circle ego ego--1">
			<div class="object-text">自分</div>
		</div>
		<div class="text text--1">リゾーム</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">１つの場所に留まらないノマド（遊牧民）の生き方が理想である。それは、多種多様な価値が根のように縦横無尽に広がるリゾームを欲望の赴くままに行き来し、楽しむ生き方である。</span>
		</p>

	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<?php include("../../parts/footer.php"); ?>
