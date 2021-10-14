<?php include("../../parts/header.php"); ?>
<?php $link = "#world-17";?>
<style>
	.scale-box {
		width: 50%;
		height: 50%;
		transition: all 1s;
	}
	.god--world {
		top: 50%;
		left: 50%;
		width: 60%;
		height: 60%;
	}
	.god--1 {
		width: 18%;
		height: 18%;
		top: 50%;
		left: 50%;
	}
	.god--2 {
		top: 0;
		left: 0;
		transform: translate(-90%, -90%);
	}
	.god--3 {
		top: 0;
		right: 0;
		transform: translate(90%, -90%);
	}
	.god--4 {
		bottom: 0;
		right: 0;
		transform: translate(90%, 90%);
	}
	.god--5 {
		left: 0;
		bottom: 0;
		transform: translate(-90%, 90%);
	}
	.thing--1 {
		width: 30%;
		height: 30%;
		top: 50%;
		left: 50%;
	}
	.box {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 30%;
		height: 30%;
	}
	.rotate {
		transition: all 1s;
		width: 100%;
		height: 100%;
	}
	.rotate2 {
		transition: all 1s;
		width: 100%;
		height: 100%;
	}
	.element {
		position: absolute;
		width: 50%;
		height: 50%;
		border-radius: 50%;
		background-color: #00A99D;
		transition: all 1s;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<polygon class="creation-arrow d-none fadein-1 fadeout-1" points="393.5,227.3 375.7,232.5 388.3,245.1 "/>
			<polygon class="creation-arrow d-none fadein-1 fadeout-1" points="393.5,400.4 375.7,395.3 388.3,382.6 "/>
			<polygon class="creation-arrow d-none fadein-1 fadeout-1" points="234.2,227.3 252,232.5 239.4,245.1 "/>
			<polygon class="creation-arrow d-none fadein-1 fadeout-1" points="234.2,400.4 252,395.3 239.4,382.6 "/>
		</svg>
		<div class="object--circle god--world d-none fadein-2"></div>
		<div class="object--circle god god--1"><div class="object-text">神</div></div>

		<div class="box">
			<div class="rotate">
				<div class="scale-box god--2">
					<div class="scale-box__element object--circle god">
						<div class="object-text">モナド</div>
					</div>
				</div>
				<div class="scale-box god--3">
					<div class="scale-box__element object--circle god">
						<div class="object-text">モナド</div>
					</div>
				</div>
				<div class="scale-box god--4">
					<div class="scale-box__element object--circle god">
						<div class="object-text">モナド</div>
					</div>
				</div>
				<div class="scale-box god--5">
					<div class="scale-box__element object--circle god">
						<div class="object-text">モナド</div>
					</div>
				</div>
			</div>
		</div>
		<div class="object--square thing thing--1 d-none fadein-3"><div class="object-text">万物</div></div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">モナド<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">ゴットフリート・ライプニッツ(1646-1716)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">万物は神によって創造された無数のモナド（単子）から成り立っている。このモナドは物質的なものではなく、精神的な実体である。</span><span class="single-diagram__content__text__2 animation-text">そして、モナドで構成された世界は神によって秩序が保たれている。</span></p>

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
			$('.scale-box__element').css('transform', 'scale(1)');
			setTimeout(function(){
				$('.fadein-2').fadeIn(1000);
				anime({
					targets: '.god--1',
					top: '20%',
					easing: 'easeInOutCubic',
					duration: 1500
				});
				$('.fadeout-1').fadeOut(1000);
				setTimeout(function(){
					$('.scale-box').css('transform', 'translate(0, 0)');
					$('.rotate').css('transform', 'rotate(720deg)');
					$('.box').fadeOut(2000);
					$('.fadein-3').fadeIn(4000);
					$('.single-diagram__content__text__2').addClass('is-animation-text');
				}, 2000);
			}, 2000);
		}, 2000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
