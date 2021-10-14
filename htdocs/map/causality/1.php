<?php include("../../parts/header.php"); ?>
<?php $link = "#causality-1";?>
<style>
	.notion--1 {
		top: 50%;
		left: 20%;
	}
	.notion--2 {
		top: 50%;
		left: 50%;
	}
	.notion--3 {
		top: 50%;
		left: 80%;
	}
	.creation-arrow {
		display: none;
	}
	.scale-box__element {
		border-radius: 50%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<polygon class="creation-arrow arrow--1" points="225,314 210,305.5 210,322 "/>
			<polygon class="creation-arrow arrow--2" points="420,314 405,305.5 405,322 "/>
		</svg>
		<div class="object--circle notion notion--1">
			<div class="object-text">第一因</div>
		</div>
		<div class="arrow"></div>
		<div class="object--circle notion--2 scale-box">
			<div class="notion scale-box__element">
				<div class="object-text">原因</div>
			</div>
		</div>
		<div class="object--circle notion--3 scale-box">
			<div class="notion scale-box__element">
				<div class="object-text">結果</div>
			</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">第一因<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">アリストテレス（B.C.384-B.C.322)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">原因と結果の系列をずっと遡っていくと、最後にそれ自体は動かされない因果関係の系列全体を支える不動の「第一因」に突き当たる。この第一因は世界の根本原因である。</span>
		</p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
	setTimeout(function(){
		$('.arrow--1').fadeIn();
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.notion--2').find('.scale-box__element').css('transform', 'scale(1)');
			setTimeout(function(){
				$('.arrow--2').fadeIn();
				setTimeout(function(){
					$('.notion--3').find('.scale-box__element').css('transform', 'scale(1)');
				}, 1000);
			}, 1000);
		}, 1000);
	}, 2000);
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
<!-- Generator: Adobe Illustrator 25.0.1, SVG Export Plug-In  -->
