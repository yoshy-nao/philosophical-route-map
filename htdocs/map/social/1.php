<?php include("../../parts/header.php"); ?>
<?php $link = "#social-1";?>
<style type="text/css">
	.government {
		width: 12%;
		height: 12%
	}
	.government--1 {
		top: 38%;
		left: 50%;
	}
	.citizen {
		width: 12%;
		height: 12%
	}
	.citizen--1 {
		top: 57%;
		left: 40%;
	}
	.citizen--2 {
		top: 57%;
		left: 60%;
	}
	.notion {
		border-radius: 50%;
	}
	.notion--1 {
		width: 10%;
		height: 10%;
		top: 20%;
		left: 50%;
	}
	.notion--2 {
		width: 10%;
		height: 10%;
		top: 66%;
		left: 25%;
	}
	.notion--3 {
		width: 10%;
		height: 10%;
		top: 66%;
		left: 75%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<circle class="social-area" cx="314" cy="314" r="210"/>
			<circle class="connect-line fadein-3 d-none" cx="314" cy="312" r="77.6"/>
			<line class="connect-line fadein-2 d-none" x1="314.1" y1="130.6" x2="314.1" y2="246.5"/>
			<line class="connect-line fadein-2 d-none" x1="160.4" y1="412" x2="260.8" y2="354.1"/>
			<line class="connect-line fadein-2 d-none" x1="467.7" y1="412.3" x2="367.3" y2="354.3"/>
		</svg>
		<div class="object--circle government government--1">
			<div class="object-text object-text--s">哲人王</div>
		</div>
		<div class="object--circle citizen citizen--1 fadein-1 d-none">
			<div class="object-text object-text--s">防衛者</div>
		</div>
		<div class="object--circle citizen citizen--2 fadein-1 d-none">
			<div class="object-text object-text--s">生産者</div>
		</div>
		<div class="object--circle notion--1 rotate-box fadein-2 d-none">
			<div class="notion rotate-box__element">
				<div class="object-text object-text--s">理性</div>
			</div>
		</div>
		<div class="object--circle notion--2 rotate-box fadein-2 d-none">
			<div class="notion rotate-box__element">
				<div class="object-text object-text--s">意志</div>
			</div>
		</div>
		<div class="object--circle notion--3 rotate-box fadein-2 d-none">
			<div class="notion rotate-box__element">
				<div class="object-text object-text--s">欲望</div>
			</div>
		</div>
		<div class="object-text object-text fadein-3 d-none">理想国家</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">哲人政治<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">プラトン（B.C.427-B.C.347)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">善のイデアを弁えた哲学者による理性的な統治を理想とした。</span>
			<span class="single-diagram__content__text__2 animation-text">そして、国家は統治者階級・防衛者階級・生産者階級から成り、彼らが持つ理性・意志・欲望が、それぞれ知恵・勇気・節制となったとき、正義が生まれ理想国家が誕生するとした。</span>
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
			$('.fadein-1').fadeIn(2000);
			setTimeout(function(){
				$('.fadein-2').fadeIn(2000);
				setTimeout(function(){
					anime({
						targets: '.rotate-box__element',
						rotateY: '720deg',
						easibong: 'easeInOutCubic',
						duration: 300
					});
					$('.notion--1').find('.object-text').text('知恵');
					$('.notion--2').find('.object-text').text('勇気');
					$('.notion--3').find('.object-text').text('節制');
					$('.single-diagram__content__text__2').addClass('is-animation-text');
					$('.fadein-3').fadeIn(2000);
				}, 3000);
			}, 1500);
		}, 2000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
