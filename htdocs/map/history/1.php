<?php include("../../parts/header.php"); ?>
<?php $link = "#history-1";?>
<style type="text/css">
	.god {
		width: 12%;
		height: 12%;
	}
	.god--1 {
		top: 33%;
		left: 13.5%;
		width: 16%;
		height: 16%;
	}
	.god--2 {
		top: 26%;
		left: 86.5%;
	}
	.god--3 {
		top: 20.5%;
		left: 65%;
	}
	.god--4 {
		top: 20.5%;
		left: 35%;
	}
	.text--1 {
		top: 60%;
		left: 13.5%;
	}
	.text--2 {
		top: 30%;
		left: 50%;
	}
	.text--3 {
		top: 60%;
		left: 86.5%;
	}
	.text--4 {
		top: 96%;
		left: 50%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">善悪二元論・終末論<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">ゾロアスター教</a></h2>
	<!-- タイトルここまで -->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<div class="fadeout">
			<svg width="628px" height="628px" viewBox="0 0 628 628">
				<line class="connect-line connect-line--l d-none fadein-5" x1="224.2" y1="129" x2="403.8" y2="129"/>
				<polygon class="battle d-none fadein-5" points="339.6,129.1 330.9,133 337.1,140.2 327.5,139.9 330,149.1 321.5,144.7 319.7,154.1 314,146.4
						308.3,154.1 306.5,144.7 298,149.1 300.5,139.9 290.9,140.2 297.1,133 288.4,129.1 297.1,125.3 290.9,118 300.5,118.3 298,109.1
						306.5,113.5 308.3,104.2 314,111.8 319.7,104.2 321.5,113.5 330,109.1 327.5,118.3 337.1,118 330.9,125.3 	"/>
				<path class="line--god len" d="M86.8,335.9c2.5,9.1,6.7,20.9,12.5,21.1c10,0.4,15-34.8,26-35c12.5-0.2,18,45,29,45c13.7,0,19.7-70.1,30-70
					c12.6,0.1,18.1,106,27,106c11.5,0,17-176.9,28-177c11.9-0.1,21.4,204.2,33,204c9.5-0.2,14.7-139.1,24-139c7.2,0.1,11.2,69,20,69
					c8,0,11-56.9,19-57c10.5-0.2,17.8,97.3,25,97c9-0.3,8.4-151.4,20-152c9-0.5,17.6,89.3,30,89c11.4-0.3,15.2-76.1,23-76
					c11.3,0.1,17.1,158,27,158c7.9,0,12.1-102,29-103c11.1-0.6,18.8,42.5,34,42c7.4-0.3,13.4-10.8,18-22.7"/>
				<circle class="point d-none fadein-6" cx="542.7" cy="336.2" r="12.6"/>
				<circle class="point d-none fadein-2" cx="85.3" cy="332.2" r="12.6"/>
				<polygon class="creation-arrow d-none fadein-1" points="85.4,297.7 93.5,283 77.3,283 "/>
				<g class="work-arrow">
					<line x1="79.5" y1="578.4" x2="531.1" y2="578.4"/>
					<polygon points="527.2,584.1 548.5,578.4 527.2,572.6 			"/>
				</g>
				<g class="work-arrow d-none fadein-8">
					<line x1="542.7" y1="215.2" x2="542.7" y2="294.5"/>
					<polygon points="537,290.6 542.7,312 548.4,290.6 			"/>
				</g>
			</svg>
		</div>
		<div class="object--circle god god--1">
			<div class="object-text object-text--s">アフラ・マズダー</div>
		</div>
		<div class="object--circle god god--2 d-none fadein-7">
			<div class="object-text">救世主</div>
		</div>
		<div class="object--circle god god--3 d-none fadein-4">
			<div class="object-text">善神</div>
		</div>
		<div class="object--circle god god--4 d-none fadein-4">
			<div class="object-text">悪神</div>
		</div>
		<div class="text text--1 d-none fadein-3">天地創造</div>
		<div class="text text--2 d-none fadein-5">闘争</div>
		<div class="text text--3 d-none fadein-9">終末</div>
		<div class="text text--4">時間</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">この世界は最高神アフラ・マズダーによって創造された。</span>
			<span class="single-diagram__content__text__2 animation-text">しかし、この世は善神と悪神の戦いの舞台となり、不安定になる。</span>
			<span class="single-diagram__content__text__3 animation-text">やがて善悪の神が争う混乱の時代が終わり、最後には救世主が現れ善神が勝利し世界は終末を迎える。</span></p>
	</div>
	<!-- テキストここまで -->
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
			$('.fadein-3').fadeIn(1000);
			setTimeout(function(){
				$('.len').addClass('line-effect--5');
				$('.fadein-4').fadeIn(1000);
				$('.single-diagram__content__text__2').addClass('is-animation-text');
				setTimeout(function(){
					anime({
						targets: '.god--3',
						left: [
							{ value: '56%', duration: 100, delay: 0 },
							{ value: '65%', duration: 500, delay: 100 }
						],
						easing: 'easeInOutCubic'
					});
					anime({
						targets: '.god--4',
						left: [
							{ value: '44%', duration: 100, delay: 0 },
							{ value: '35%', duration: 500, delay: 100 }
						],
						easing: 'easeInOutCubic'
					});
					setTimeout(function(){
						$('.fadein-5').fadeIn(1000);
						setTimeout(function(){
							$('.fadein-6').fadeIn(1000);
							setTimeout(function(){
								$('.fadein-7').fadeIn(1000);
								$('.single-diagram__content__text__3').addClass('is-animation-text');
								setTimeout(function(){
									$('.fadein-8').fadeIn(1000);
									setTimeout(function(){
										$('.fadein-9').fadeIn(1000);
									}, 1000);
								}, 1000);
							}, 2000);
						}, 3000);
					}, 600);
				}, 2000);
			}, 2000);
		}, 1000);
	}, 1000);
}, 1500);
</script>
<?php include("../../parts/footer.php"); ?>
