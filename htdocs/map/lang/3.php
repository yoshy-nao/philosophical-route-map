<?php include("../../parts/header.php"); ?>
<?php $link = "#lang-3";?>
<style>
	.ego--1 {
		top: 30%;
		left: 50%;
	}
	.lang--1 {
		top: 65%;
		left: 50%;
		width: 30%;
		height: 30%;
	}
	.thing--1 {
		width: 20%;
		height: 20%;
		top: 65%;
		left: 50%;
	}
	.object-text--bottom {
		top: 108%;
	}
	/* .thing {
		background: none;
		border: 1px dashed #ccc;
	} */
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<polygon class="creation-arrow d-none fadein-1" points="314,291.6 322.5,275 305.5,275 	"/>		</svg>
		<div class="object--circle ego ego--1">
			<div class="object-text c-black">人間</div>
		</div>
		<div class="object--circle notion--lang lang--1 d-none fadein-2">
			<div class="object-text--bottom d-none fadein-2">名前</div>
		</div>
		<div class="thing square-object thing--1"></div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">言語の恣意性<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">フェルディナン・ド・ソシュール（1857-1913）</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">既に存在するものに人間が名前をつけているのではなく、人間が名前を与えることで世界を区切り、秩序づけている。つまり、本来ものの区別など存在しない。</span>
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
			$('.fadein-2').fadeIn(1000);
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
