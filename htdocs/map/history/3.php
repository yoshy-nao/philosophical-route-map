<?php include("../../parts/header.php"); ?>
<?php $link = "#history-3";?>
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
	top: 76%;
	left: 58%;
}
.text--7 {
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
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">進歩史観<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">フリードリヒ・ヘーゲル(1770-1831)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg class="fadeout2" width="628" height="628" viewBox="0 0 628 628">
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
			<g class="work-arrow">
				<line class="st1" x1="79.5" y1="578.4" x2="531.1" y2="578.4"/>
				<polygon class="st2" points="527.2,584.1 548.5,578.4 527.2,572.6 			"/>
			</g>
		</svg>
		<div class="text text--1  d-none p-fadein-1">弁証法</div>
		<div class="text text--2 d-none p-fadein-2">弁証法</div>
		<div class="text text--3 d-none p-fadein-3">弁証法</div>
		<div class="text text--4 d-none p-fadein-4">弁証法</div>
		<div class="text text--5 d-none p-fadein-5">人倫</div>
		<div class="text text--6 d-none fadein-1">絶対精神</div>
		<div class="text text--7">時間</div>
		<div class="p-ball scale-box">
			<div class="ball scale-box__element">
			</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">対立とその解消（弁証法）を繰り返すことによって、人類の歴史は進歩し続けている。</span>
			<span class="single-diagram__content__text__2 animation-text">そして、その最終的なゴールは真の自由が実現された状態（人倫）である。また、その歴史を動かしているものの根底には絶対精神がある。</span></p>
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
			$('.single-diagram__content__text__2').addClass('is-animation-text');
			$('.fadein-1').fadeIn();
		}, 13000);
	}, 2000);
</script>
<?php include("../../parts/footer.php"); ?>
