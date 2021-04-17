<?php include("../../parts/header.php"); ?>
<?php $link = "#social-13";?>
<style type="text/css">
	.government--1 {width: 14%; height: 14%;top: 44.5%;left: 31%;}
	.citizen--1 {width: 14%; height: 14%;top: 44.5%;left: 68%;}
	.citizen--2 {width: 14%; height: 14%;top: 44.5%;left: 32%;}
	.notion--1 {top: 44.5%;left: 68%;z-index: -100;}
	.notion--2 {width: 16%; height: 16%;top: 65%;left: 50%;}
	.word--1 { top: 45%; left: 52%;}
	.word--2 { top: 73%; left: 50%;}
	.text--1 { top: 39%; left: 49%;}
	.text--2 { top: 51%; left: 49%;}
	.text--3 { top: 39%; left: 48%;}
	.text--4 { top: 30%; left: 50%;}
	.scale-box__element {
		border-radius: 50%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">共産主義社会<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">カール・マルクス（1813-1883)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<circle class="social-area" cx="314" cy="314" r="210"/>
			<g class="work-arrow d-none fadein-1 fadeout-1">
				<line class="st1" x1="255.4" y1="271.5" x2="345.9" y2="271.5"/>
				<polygon class="st2" points="343,275.8 359.1,271.5 343,267.2 			"/>
			</g>
			<g class="work-arrow d-none fadein-2 fadeout-1">
				<line class="st1" x1="359.1" y1="294.2" x2="268.6" y2="294.2"/>
				<polygon class="st2" points="271.5,289.9 255.4,294.2 271.5,298.5 			"/>
			</g>
			<line class="connect-line connect-line--l fadeout-2" x1="203.7" y1="282" x2="308.2" y2="399.3"/>
			<line class="connect-line connect-line--l d-none fadein-4 fadeout-2" x1="228.2" y1="281.1" x2="385.3" y2="281.1"/>
			<polygon class="battle d-none fadein-4 fadeout-2" points="320.4,281.1 314.1,283.9 318.6,289.2 311.7,288.9 313.4,295.6 307.3,292.4 306,299.2 301.9,293.6
				297.8,299.2 296.5,292.4 290.3,295.6 292.1,288.9 285.2,289.2 289.7,283.9 283.4,281.1 289.7,278.3 285.2,273.1 292.1,273.3
				290.3,266.7 296.5,269.9 297.8,263.1 301.9,268.6 306,263.1 307.3,269.9 313.4,266.7 311.7,273.3 318.6,273.1 314.1,278.3 	"/>
		</svg>
		<div class="object--circle notion notion--1 d-none fadein-3 fadeout-2">
			<div class="object-text--bottom">疎外</div>
		</div>
		<div class="object--circle notion--2 notion">
			<div class="object-text">生産手段</div>
		</div>
		<div class="object--circle government government--1 fadeout-2">
			<div class="object-text">資本家</div>
		</div>
		<div class="object--circle citizen citizen--1">
			<div class="object-text">労働者</div>
		</div>
		<div class="object--circle citizen citizen--2 d-none fadein-6">
			<div class="object-text">労働者</div>
		</div>
		<div class="text text--1 d-none fadein-1 fadeout-1">賃金</div>
		<div class="text text--2 d-none fadein-2 fadeout-1">労働</div>
		<div class="text text--3 d-none fadein-4 fadeout-2">階級闘争</div>
		<div class="text text--4 d-none fadein-5">共産主義社会</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">資本主義体制において資本家はより多くの利潤を得るために、労働者を少ない賃金で酷使する。</span>
			<span class="single-diagram__content__text__2 animation-text">そのため、生産手段を持たない労働者にとって、本来人間の本質であるはずの労働は苦痛となり、自己の本質を失ってしまう（疎外）。</span>
			<span class="single-diagram__content__text__3 animation-text">次第に資本家と労働者の格差は広がり、ついには数の上では圧倒的に優位な労働者によって革命（階級闘争）が起こる。</span>
			<span class="single-diagram__content__text__4 animation-text">そして、新たに生産手段が公有化された共産主義社会が築かれる。</span>
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
			$('.fadein-2').fadeIn(1000);
			setTimeout(function(){
				$('.fadein-3').fadeIn(1000);
				$('.single-diagram__content__text__2').addClass('is-animation-text');
				setTimeout(function(){
					$('.fadeout-1').fadeOut(1000);
					setTimeout(function(){
						$('.single-diagram__content__text__3').addClass('is-animation-text');
						anime({
							targets: '.citizen--1',
							left: [
								{ value: '56.5%', duration: 100, delay: 0 },
								{ value: '68%', duration: 500, delay: 100 }
							],
							easing: 'easeInOutCubic',
							duration: 1000
						});
						anime({
							targets: '.government--1',
							left: [
								{ value: '42.5%', duration: 100, delay: 0 },
								{ value: '31%', duration: 500, delay: 100 }
							],
							easing: 'easeInOutCubic',
							duration: 1000
						});
						setTimeout(function(){
							$('.fadein-4').fadeIn();
							setTimeout(function(){
								$('.single-diagram__content__text__4').addClass('is-animation-text');
								$('.fadeout-2').fadeOut(1000);
								$('.fadein-5').fadeIn(1000);
									anime({
										targets: '.citizen--1',
										left: '50%',
										easing: 'easeInOutCubic',
										duration: 1000
									});
							}, 5000);
						}, 1000);
					}, 2000);
				}, 2000);
			}, 2000);
		}, 2000);
	}, 2000);
</script>
<?php include("../../parts/footer.php"); ?>
