<?php include("../../parts/header.php"); ?>
<?php $link = "#perception-12";?>
<style>
	.ego--1 {
		top: 50%;
		left: 25%;
		width: 28%;
		height: 28%;
		background-color: #78C1BD;
	}
	.ego--2 {
		top: 50%;
		left: 25%;
		width: 15%;
		height: 15%;
		background-color: #EA60BC;
		border: 1px dashed #222;
	}
	.text--2 {
		top: 50%;
		left: 23%;
	}
	.thing--1 {
		top: 50%;
		left: 75%;
	}
	.text--1 {
		top: 45%;
		left: 49%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg viewBox="0 0 628 628">
			<line class="connect-line connect-line--l d-none fadein-1" x1="191" y1="314" x2="466" y2="314"/>
		</svg>
		<div class="object--circle ego ego--1">
			<div class="object-text--bottom">身体</div>
		</div>
		<div class="object--circle ego--2">
			<div class="object-text c-black">精神</div>
		</div>
		<div class="object--square thing thing--1">
			<div class="object-text--bottom">客観</div>
		</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">可逆性<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">モーリス・メルロ＝ポンティ（1908-1961）</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">身体と世界との接点に注目した時、身体ははたらきかける主体であると同時に、はたらきかけられる客体にもなっている。</span>
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
				anime({
					targets: '.ego--1',
					background: [
					{ value: '#EA60BC', duration: 1000, delay: 1000 },
					{ value: '#78C1BD', duration: 1000, delay: 1000 },],
					easing: 'easeInOutQuad',
					loop: true
				});
			}, 1000);
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
