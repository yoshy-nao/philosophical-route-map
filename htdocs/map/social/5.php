<?php include("../../parts/header.php"); ?>
<?php $link = "#social-5";?>
<style type="text/css">
	.government--1 {top: 50%;left: 33%;}
	.citizen--1 {top: 50%;left: 71%;}
	.word--1 { top: 45%; left: 53%;}
	.word--2 { top: 70%; left: 52%;}
	.word--3 { top: 55%; left: 53%;}
	.word--4 { top: 30%; left: 52%;}
	.notion {
		position:absolute;
		width: 10%;
		height: 10%;
		border-radius: 50%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title">議会制民主主義<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">ジョン・ロック（1632-1704)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<circle class="social-area" cx="314" cy="314" r="210"/>
			<ellipse class="connect-line connect-line--m d-none fadein-2" cx="323" cy="312" rx="120" ry="100"/>
			<g class="work-arrow">
				<!-- <line x1="272" y1="312.4" x2="372.5" y2="312.4"/>
				<polygon points="369,317.5 388,312.4 369,307.3 			"/> -->
				<g class=" d-none fadein-3">
					<line x1="273" y1="304.7" x2="373.5" y2="304.7"/>
					<polygon points="370,309.8 389,304.7 370,299.6 				"/>
				</g>
				<g class=" d-none fadein-4">
					<line x1="389" y1="323.3" x2="288.5" y2="323.3"/>
					<polygon points="292,318.2 273,323.3 292,328.4 				"/>
				</g>
			</g>
		</svg>
		<div class="object--circle government government--1">
			<div class="object-text">国家</div>
		</div>
		<div class="object--circle citizen citizen--1">
			<div class="object-text">人民</div>
		</div>
		<div class="word word--1 d-none fadein-3">支配</div>
		<div class="word word--3 d-none fadein-4">抵抗権</div>
		<div class="word word--2 d-none fadein-2">社会契約</div>
		<div class="word word--4 d-none fadein-1">議会制民主主義</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">民主的な国家にふさわしい制度は人民に選ばれた代表者が運営する議会制民主主義である。</span>
			<span class="single-diagram__content__text__2 animation-text">社会契約は人民と政府が互いに契約を守ることで成立する。そのため、もし政府が人民の権利を抑圧し、契約に違反するならば、人民は自らの権利を守るために戦う権利（抵抗権）と、新しい政府を樹立する権利（革命権）を持つ。</span>
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
		$('.fadein-1').fadeIn(1000);
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.fadein-2').fadeIn(1000);
			setTimeout(function(){
				$('.fadein-3').fadeIn(1000);
				$('.single-diagram__content__text__2').addClass('is-animation-text');
				setTimeout(function(){
					$('.fadein-4').fadeIn(1000);
				}, 1000);
			}, 1000);
		}, 3000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
