<?php include("../../parts/header.php"); ?>
<?php $link = "#mind-3";?>
<style text="">
	.god--1 {
		top: 15%;
		left: 50%;
		width: 17%;
		height: 17%;
	}
	.ego--1 {
		top: 40%;
		left: 50%;
		width: 12.5%;
		height: 12.5%;
		border: 1px dashed #222;
	}
	.text--1 {
		top: 21.5%;
		left: 50%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">機械論的自然観<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">トマス・ホッブス（1588-1679)
</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<g class="material">
				<circle cx="314" cy="134.3" r="42.8"/>
				<path d="M352.9,186.7h-77.8c-17,0-30.8,9.8-30.8,22l10.3,157.5c0,8.5,6.7,15.8,16.6,19.5v122.7
					c0,14.7,11.9,26.6,26.6,26.6h32.4c14.7,0,26.6-11.9,26.6-26.6V385.7c9.8-3.7,16.6-11,16.6-19.5l10.3-157.5
					C383.7,196.5,369.9,186.7,352.9,186.7z"/>
			</g>
		</svg>
		<div class="object--circle material ego--1 c-black">
			<div class="object-text">魂</div>
		</div>
		<div class="text text--1 c-black">身体</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">自然科学の観点から精神を含む超自然的実体の存在を認めない。したがって、身体や魂を含め人間は全て機械と同じ物質的なものである。</span></p>
	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
	setTimeout(function(){
		$('.single-diagram__content__text__1').addClass('is-animation-text');
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
