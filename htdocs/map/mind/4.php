<?php include("../../parts/header.php"); ?>
<?php $link = "#mind-4";?>
<style text="">
	.god--1 {
		top: 9%;
		left: 50%;
		width: 12%;
		height: 12%;
	}
	.ego--1 {
		top: 30%;
		left: 50%;
		width: 12.5%;
		height: 12.5%;
	}
	.ego {
		filter:drop-shadow(1vw 1vw 1vw rgba(0, 0, 0, 0.3));
	}
	.text--1 {
		top: 55%;
		left: 50%;
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
			<g class="body--2">
				<path d="M349.4,269.7h-70.9c-15.5,0-28.1,9-28.1,20l9.4,143.5c0,7.7,6.1,14.4,15.1,17.8v111.7
					c0,13.4,10.9,24.2,24.2,24.2h29.5c13.4,0,24.2-10.9,24.2-24.2V451c9-3.3,15.1-10,15.1-17.8l9.4-143.5
					C377.5,278.7,364.9,269.7,349.4,269.7z"/>
				<circle cx="314" cy="222" r="39"/>
			</g>
			<polygon class="creation-arrow d-none fadein-1" points="314,128.7 323.2,112 304.8,112 "/>
		</svg>
		<div class="object--circle god god--1">
			<div class="object-text">神</div>
		</div>
		<div class="object--circle ego--1 scale-box">
			<div class="ego scale-box__element">
				<div class="object-text">意識</div>
			</div>
		</div>
		<div class="text text--1 c-black">身体</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">生得観念・心身二元論<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">ルネ・デカルト(1596-1650)</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">意識は神によって与えられたものである（生得観念）。</span><span class="single-diagram__content__text__2 animation-text">そして、どんなに疑っても私という意識の存在だけは確固たるものであり、精神的な意識と物質的な身体は全く別次元のものである（心身二元論）。</span></p>
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
				$('.single-diagram__content__text__2').addClass('is-animation-text');
			}, 2000);
		}, 2000);
	}, 2000);
</script>
<?php include("../../parts/footer.php"); ?>
