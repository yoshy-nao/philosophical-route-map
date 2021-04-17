<?php include("../../parts/header.php"); ?>
<?php $link = "#mind-9";?>
<style>
	.notion--1 {
		top: 50%;
		left: 28%;
		width: 25%;
		height: 25%;
	}
	.notion--2 {
		top: 50%;
		left: 72%;
		width: 25%;
		height: 25%;
	}
	.ego--1 {
		top: 50%;
		left: 72%;
		width: 25%;
		height: 25%;
	}
	.scale-box__element {
		border-radius: 30%;
	}
	.thing--1 {
		top: 50%;
		left: 72%;
		width: 25%;
		height: 25%;
	}
	.text--1 {
		top: 43%;
		left: 50%;
	}
	.rotate-box__element {
		border-radius: 50%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">鏡像段階論<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">ジャック・ラカン（1901-1981）</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<line class="connect-line connect-line--l d-none fadein-2 fadeout-2 fadein-4" x1="191" y1="314" x2="466" y2="314"/>
			<!-- <polygon class="creation-arrow d-nonxe fadein-1 fadeout-1" points="326,314 302,302 302,326 "/> -->
		</svg>
		<div class="object--circle notion--1 rotate-box">
			<div class="notion rotate-box__element">
				<div class="object-text">寸断された身体</div>
			</div>
		</div>
		<div class="object--circle notion notion--2 d-none fadein-1 fadeout-2">
			<div class="object-text c-white">鏡像</div>
		</div>
		<div class="object--circle ego ego--1 d-none fadein-3">
			<div class="object-text">他者</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">生まれたばかりは手や足などを一つの身体イメージに統合できない（寸断された身体）。</span><span class="single-diagram__content__text__2 animation-text">しかし、幼少期に鏡に映った自分を認識し、視覚的に「私」という統一されたイメージを作り出す（鏡像段階）。</span><span class="single-diagram__content__text__3 animation-text">それから、3〜5歳の時期に、母親や他人が私に対してどう接しているかを感じるうちに「私」とはどういう存在なのかを掴みはじめる。</span></p>

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
		$('.fadein-1').fadeIn(1000);
		setTimeout(function(){
			$('.fadein-2').fadeIn(1000);
			setTimeout(function(){
				$('.single-diagram__content__text__2').addClass('is-animation-text');
				anime({
					targets: '.rotate-box__element',
					rotateY: '720deg',
					background: '#EA60BC',
					easibong: 'easeInOutCubic',
					duration: 300
				});
				$('.rotate-box__element').css('border', 'none');
				$('.rotate-box__element').find('.object-text').css('color', '#222');
				setTimeout(function(){
					$('.notion--1').find('.object-text').text('私');
						setTimeout(function(){
							$('.fadeout-2').fadeOut(1000);
							setTimeout(function(){
								$('.fadein-3').fadeIn(1000);
								$('.single-diagram__content__text__3').addClass('is-animation-text');
								setTimeout(function(){
									$('.fadein-4').fadeIn(1000);
								}, 2000);
							}, 3000);
						}, 1500);
				}, 300);
			}, 1500);
		}, 1500);
	}, 2000);
}, 1000);
	//JavaScript
	// function linkUrlA() {
	// 	location.href = '/history/5.php'
	// }
	// var button = $('#button-1');
	// button.click(function(){
	// 	$('.fadeout').fadeOut();
	// 	setTimeout(linkUrlA, 1500);
	// });
</script>
<?php include("../../parts/footer.php"); ?>
