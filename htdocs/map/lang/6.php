<?php include("../../parts/header.php"); ?>
<?php $link = "#lang-6";?>
<style>
	.lang--1 {
		top: 50%;
		left: 30%;
		width: 22%;
		height: 22%;
	}
	.notion--1 {
		top: 50%;
		left: 70%;
		width: 22%;
		height: 22%;
	}
	.structure {
		top: 50%;
		left: 50%;
		width: 80%;
		height: 80%;
	}
</style>
<div class="single-diagram">
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<line class="connect-line connect-line--l d-none fadein-2" x1="225.7" y1="314.2" x2="500.7" y2="314.2"/>
		</svg>
		<div class="object--circle structure d-none fadein-3">
			<div class="object-text--bottom">ルール</div>
		</div>
		<div class="object--circle notion--lang lang--1 d-none fadein-1">
			<div class="object-text">日常言語</div>
		</div>
		<div class="notion object--circle notion--1"><div class="object-text">事柄</div></div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content">
		<!-- タイトル -->
		<h2 class="single-diagram__content__title">言語ゲーム<br><a href="/map/index.php<?=$link?>" class="single-diagram__content__subtitle">ルートヴィヒ・ウィトゲンシュタイン（1889-1951）</a></h2>
		<!-- タイトルここまで-->
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">後にウィトゲンシュタイン本人が自らの写像理論を否定して唱えた説。</span>
			<span class="single-diagram__content__text__2 animation-text">日常言語は、時と場合によって意味合いが変わってくる。</span>
			<span class="single-diagram__content__text__3 animation-text">つまり、会話はある一定のルールに従って行われるものであり、そのルールを理解していないと日常言語を扱うことはできない。</span>
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
			$('.single-diagram__content__text__2').addClass('is-animation-text');
			$('.fadein-1').fadeIn(1000);
			setTimeout(function(){
				$('.fadein-2').fadeIn(1000);
				setTimeout(function(){
					$('.single-diagram__content__text__3').addClass('is-animation-text');
					$('.fadein-3').fadeIn(1000);
				}, 3000);
			}, 1000);
		}, 3000);
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
