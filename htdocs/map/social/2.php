<?php include("../../parts/header.php"); ?>
<?php $link = "#social-2";?>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<circle class="social-area" cx="314" cy="420" r="170"/>
			<g class="work-arrow d-none fadein-4">
				<g>
					<line class="st1" x1="314" y1="378" x2="314" y2="202.2"/>
					<g>
						<polygon class="st2" points="318.3,205.2 314,189 309.7,205.2 			"/>
					</g>
				</g>
			</g>
		</svg>
		<div class="object--circle citizen citizen--1">
			<div class="object-text object-text--s">市民</div>
		</div>
		<div class="object--circle citizen citizen--2">
			<div class="object-text object-text--s">市民</div>
		</div>
		<div class="object--circle citizen citizen--3">
			<div class="object-text object-text--s">市民</div>
		</div>
		<div class="object--circle notion notion--2 d-none fadein-1">
			<div class="object-text d-none fadein-2">共和制</div>
		</div>
		<div class="object--circle notion notion--1 d-none fadein-3">
			<div class="object-text">最高善</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">共和制<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">アリストテレス（B.C.384-B.C.322)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">中間層である市民による支配、中でも大衆が参加する共和制が最善の国家体制である。そして、程よい態度をとるという「中庸」をわきまえるべきである。</span>
			<span class="single-diagram__content__text__2 animation-text">それによって、共同体としての最高善を目指す必要がある。</span>
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
		setTimeout(function(){
			$('.fadein-2').fadeIn(2000);
			$('.single-diagram__content__text__1').addClass('is-animation-text');
			setTimeout(function(){
				$('.fadein-3').fadeIn(2000);
				$('.single-diagram__content__text__2').addClass('is-animation-text');
				setTimeout(function(){
					$('.fadein-4').fadeIn(2000);
				}, 1000);
			}, 3000);
		}, 1000);
	}, 1000);
</script>
<style>
	.citizen--1 {
		top: 58%;
		left: 38%;
	}
	.citizen--2 {
		top: 58%;
		left: 62%;
	}
	.citizen--3 {
		top: 82%;
		left: 50%;
	}
	.word--1 {
		top: 86%;
		left: 50%;
	}
	.notion {
		top: 16%;
		left: 50%;
	}
	.notion--2 {
		width: 30%;
		height: 30%;
		top: 67%;
		left: 50%;
		z-index: -100;
	}
</style>
<?php include("../../parts/footer.php"); ?>
