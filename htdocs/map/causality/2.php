<?php include("../../parts/header.php"); ?>
<?php $link = "#causality-2";?>
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
	<!-- タイトル -->
	<h2 class="single-diagram__title ">神の存在証明<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">トマス・アクィナス（1225-1274)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<polygon class="creation-arrow arrow--1" points="225,314 210,305.5 210,322 "/>
			<polygon class="creation-arrow arrow--2" points="420,314 405,305.5 405,322 "/>
		</svg>
		<div class="object--circle god notion--1">
			<div class="object-text">神</div>
		</div>
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
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">あらゆるものが原因と結果の連続によって起こっていると唱えるアリストテレス哲学を踏まえ、全てを作り出した根本的な原因（第一因）を神と位置付ける。</span>
			<span class="single-diagram__content__text__2 animation-text">そして、その神は全てを生み出し、不動の動者として常に存在し続ける。</span>
		</p>
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
			$('.arrow--1').fadeIn();
			$('.single-diagram__content__text__2').addClass('is-animation-text');
			setTimeout(function(){
				$('.notion--2').find('.scale-box__element').css('transform', 'scale(1)');
				setTimeout(function(){
					$('.arrow--2').fadeIn();
					setTimeout(function(){
						$('.notion--3').find('.scale-box__element').css('transform', 'scale(1)');
					}, 1000);
				}, 1000);
			}, 1000);
		}, 5000);
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
<!-- Generator: Adobe Illustrator 25.0.1, SVG Export Plug-In  -->
