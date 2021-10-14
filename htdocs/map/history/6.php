<?php include("../../parts/header.php"); ?>
<?php $link = "#history-6";?>
<style>
.text--1 {
	top: 66%;
	left: 18%;
}
.text--2 {
	top: 55.5%;
	left: 35.5%;
}
.text--3 {
	top: 45%;
	left: 53%;
}
.text--4 {
	top: 34.5%;
	left: 70.5%;
}
.text--5 {
	top: 27%;
	left: 88%;
}
.text--6 {
	top: 58%;
	left: 75%;
}
.text--7 {
	top: 83%;
	left: 75%;
}
.text--8 {
	top: 96%;
	left: 50%;
}
.p-ball {
	height: 5%;
	width: 5%;
	border-radius: 50%;
	background-color: #FF1493;
	position: absolute;
	top: 77.5%;
	left: 0%;
}
.kabu {
	transform: translateY(-300);
}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg class="svg1" width="628" height="628" viewBox="0 0 628 628">
			<polygon style="fill:#483D8B;" points="551.35,207.02 0.42,526.68 0.41,628 541.72,628 543.87,628 628.37,628 628.37,207.02 "/>
			<polyline class="line--artificial" points="0.5,526.68 550.2,208.2 628.45,207.02 "/>
			<polygon class="battle battle--1 d-none p-fadein-1" points="142.7,462.6 132.3,467.1 139.7,475.7 128.4,475.3 131.3,486.3 121.2,481 119.1,492.1 112.3,483.1
					105.6,492.1 103.4,481 93.4,486.3 96.3,475.3 85,475.7 92.3,467.1 82,462.6 92.3,458 85,449.4 96.3,449.8 93.4,438.8 103.4,444.1
					105.6,433 112.3,442.1 119.1,433 121.2,444.1 131.3,438.8 128.4,449.8 139.7,449.4 132.3,458 	"/>
			<polygon class="battle battle--2 d-none p-fadein-2" points="252.7,398.2 242.4,402.8 249.7,411.4 238.4,411 241.3,422 231.3,416.7 229.2,427.8 222.4,418.7
					215.7,427.8 213.5,416.7 203.5,422 206.4,411 195.1,411.4 202.4,402.8 192.1,398.2 202.4,393.7 195.1,385.1 206.4,385.5
					203.5,374.5 213.5,379.8 215.7,368.6 222.4,377.7 229.2,368.6 231.3,379.8 241.3,374.5 238.4,385.5 249.7,385.1 242.4,393.7 	"/>
			<polygon class="battle battle--3 d-none p-fadein-3" points="362.8,333.9 352.5,338.5 359.8,347.1 348.5,346.7 351.4,357.6 341.4,352.4 339.2,363.5 332.5,354.4
					325.7,363.5 323.6,352.4 313.6,357.6 316.4,346.7 305.1,347.1 312.5,338.5 302.1,333.9 312.5,329.3 305.1,320.7 316.4,321.1
					313.6,310.2 323.6,315.4 325.7,304.3 332.5,313.4 339.2,304.3 341.4,315.4 351.4,310.2 348.5,321.1 359.8,320.7 352.5,329.3 	"/>
			<polygon class="battle battle--4 d-none p-fadein-4" points="472.9,269.6 462.5,274.2 469.9,282.8 458.6,282.4 461.5,293.3 451.4,288.1 449.3,299.2 442.5,290.1
					435.8,299.2 433.7,288.1 423.6,293.3 426.5,282.4 415.2,282.8 422.6,274.2 412.2,269.6 422.6,265 415.2,256.4 426.5,256.8
					423.6,245.9 433.7,251.1 435.8,240 442.5,249.1 449.3,240 451.4,251.1 461.5,245.9 458.6,256.8 469.9,256.4 462.5,265 	"/>
			<path class="kabu" style="fill:#3D5889;" d="M0,586.34V628l541.29-0.11h0.01h86.66c0.01-67.63,0.03-135.26,0.04-202.89c-17.28-0.75-45.53-1.22-80,2c-146.68,13.7-216.25,76.44-362,122C144.69,561.91,81.58,578.35,0,586.34z"/></path>
			<g class="work-arrow">
				<line x1="79.5" y1="578.4" x2="531.1" y2="578.4"/>
				<polygon points="527.2,584.1 548.5,578.4 527.2,572.6 			"/>
			</g>
		</svg>
		<div class="text text--6 d-none fadein-1">上部構造（精神）</div>
		<div class="text text--7 d-none fadein-1">下部構造（物質）</div>
		<div class="text text--1  d-none p-fadein-1">階級闘争</div>
		<div class="text text--2 d-none p-fadein-2">階級闘争</div>
		<div class="text text--3 d-none p-fadein-3">階級闘争</div>
		<div class="text text--4 d-none p-fadein-4">階級闘争</div>
		<div class="text text--5 d-none p-fadein-5">共産主義</div>
		<div class="text text--8">時間</div>
		<div id="p-ball" class="ball"></div>
		<div class="p-ball scale-box">
			<div class="ball scale-box__element">
			</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">唯物論的階級闘争<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">カール・マルクス(1818-1883)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">生産関係による物質的な仕組みを下部構造、精神的な仕組みを上部構造とし、上部構造は下部構造によって決定している。</span>
			<span class="single-diagram__content__text__2 animation-text">そして、技術が進歩することでこれまでの生産関係が維持できなくなると階級闘争が起こり、それによって社会は進歩していく。</span>
			<span class="single-diagram__content__text__3 animation-text">そして、最終的に理想的な社会である共産主義社会が成立する。</span>
		</p>
		<!-- <div id="button" class="single-diagram__content__button"><i class="fas fa-angle-double-left"></i> 進歩主観</div> -->
	</div>
	<!-- テキストここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
	function linkUrl() {
		location.href = '/history/3.php'
	}
	var button = $('#button');
	button.click(function(){
		$('.fadeout').fadeOut();
		setTimeout(linkUrl, 2000);
		anime({
			targets: '.svg2',
			translateY: [ { value: 0, duration: 2000, delay: 0 }],
			easing: 'linear'
		});
	});
	//snap.svg

	var path =　[
		'M0,586.34V628l541.29-0.11h0.01h86.66c0.01-67.63,0.03-135.26,0.04-202.89c-17.28-0.75-45.53-1.22-80,2c-146.68,13.7-216.25,76.44-362,122C144.69,561.91,81.58,578.35,0,586.34z',
		'M0,586.34V628l541.29-0.11h0.01h86.66c0.01-67.63,0.03-135.26,0.04-202.89c-30.77,18.09-80.67,43.95-146,62c-115.28,31.85-177.79,11.51-299,36C139.36,531.82,75.34,549.02,0,586.34z'
	];
	var indexPath = 0;
	function playAnimation() {
		if (indexPath === 0) {
			Snap( '.kabu' ).animate(
				{d: path[1] }, 3000, playAnimation );
			indexPath = 1;
		} else {
			Snap( '.kabu' ).animate(
				{d: path[0] }, 3000, playAnimation );
			indexPath = 0;
		}
	}
	playAnimation();
	anime({
		targets: '.kabu',
		translateY: [ { value: 300, duration: 0, delay: 0 },{ value: 0, duration: 1500, delay: 2000 }],
		easing: 'linear'
	});
	setTimeout(function(){
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		$('.fadein-1').fadeIn(2000);
		setTimeout(function(){
			$('.single-diagram__content__text__2').addClass('is-animation-text');
			setTimeout(function(){
				$('.single-diagram__content__text__3').addClass('is-animation-text');
			}, 9000);
		}, 4000);
	}, 2000);
</script>
<?php include("../../parts/footer.php"); ?>
