<?php include("../../parts/header.php"); ?>
<?php $link = "#history-2";?>
<style type="text/css">
	.god {
		width: 15%;
		height: 15%;
	}
	.god--1 {
		top: 16%;
		left: 13.5%;
	}
	.god--2 {
		top: -50%;
		left: 86.5%;
		transition: all 3.5s;
	}
	.text--1 {
		top: 41%;
		left: 13.5%;
	}
	.text--2 {
		top: 65%;
		left: 50%;
	}
	.text--3 {
		top: 86%;
		left: 86.5%;
	}
	.text--4 {
		top: 96%;
		left: 50%;
	}
	.text--5 {
		top: 30%;
		left: 25%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<div class="fadeout">
			<svg width="628px" height="628px" viewBox="0 0 628 628">
				<path class="line--god len" d="M143,221.1c18.9-0.3,46.3,0.4,78.7,5.9c34.4,5.8,154.8,28,244.2,132c42.6,49.6,65.1,102.5,77.1,145.1"/>
				<circle class="point d-none fadein-2" cx="85.3" cy="220.2" r="12.6"/>
				<circle class="point d-none fadein-3" cx="143.4" cy="220.2" r="12.6"/>
				<circle class="point d-none fadein-5" cx="542.7" cy="503.2" r="12.6"/>
				<polygon class="creation-arrow d-none fadein-1" points="85.4,183.7 93.5,169 77.3,169 "/>
				<g class="work-arrow d-none fadein-7">
					<line x1="542.7" y1="272.2" x2="542.7" y2="459.1"/>
					<polygon points="537,455.2 542.7,476.6 548.4,455.2 			"/>
				</g>
				<g class="work-arrow">
					<line x1="79.5" y1="578.4" x2="531.1" y2="578.4"/>
					<polygon points="527.2,584.1 548.5,578.4 527.2,572.6 			"/>
				</g>
			</svg>
		</div>
		<div class="object--circle god god--1">
			<div class="object-text">神</div>
		</div>
		<div class="object--circle god god--2">
			<div class="object-text">キリスト</div>
		</div>
		<div class="text text--1 d-none fadein-2">天地創造</div>
		<div class="text text--5 d-none fadein-3">原罪</div>
		<div class="text text--2 d-none fadein-4">堕落</div>
		<div class="text text--3 d-none fadein-8">最後の審判</div>
		<div class="text text--4">時間</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">天地創造・最後の審判<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">キリスト教</a></h2>
		<!-- タイトルここまで -->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">神が最初に創造した人間の男女であるアダムとイヴは神と共にエデンの園で暮らしていた。</span>
			<span class="single-diagram__content__text__2 animation-text">しかし、ある日彼らは神との約束を破り、知恵のみを食べてしまった（原罪）。それによって、人間は楽園から追放されてしまい、地上での人間の歴史が始まる。</span>
			<span class="single-diagram__content__text__3 animation-text">それ以降も人間たちは数が増えるにつれてますます堕落、退歩の一途を辿ってゆく。</span>
			<span class="single-diagram__content__text__4 animation-text">そして、最終的に復活したキリストによって最後の審判が行われ、人間の歴史に終止符が打たれる。</span></p>
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
				$('.single-diagram__content__text__2').addClass('is-animation-text');
				setTimeout(function(){
					$('.len').addClass('line-effect--5');
					$('.single-diagram__content__text__3').addClass('is-animation-text');
					setTimeout(function(){
						$('.fadein-4').fadeIn(1000);
						setTimeout(function(){
							$('.fadein-5').fadeIn(1000);
							setTimeout(function(){
								$('.god--2').css('top', '33.5%');
								$('.single-diagram__content__text__4').addClass('is-animation-text');
								setTimeout(function(){
									$('.fadein-7').fadeIn(1000);
									setTimeout(function(){
										$('.fadein-8').fadeIn(1000);
									}, 2000);
								}, 2000);
							}, 1500);
						}, 1500);
					}, 1500);
				}, 3000);
			}, 3000);
		}, 1000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
