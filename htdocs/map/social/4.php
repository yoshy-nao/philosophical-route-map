<?php include("../../parts/header.php"); ?>
<?php $link = "#social-4";?>
<style type="text/css">
	.government--1 {top: 50%;left: 33%;}
	.citizen--1 {top: 50%;left: 71%;}
	.word--1 { top: 45%; left: 52%;}
	.word--2 { top: 30%; left: 52%;}
	.notion {
		position:absolute;
		width: 10%;
		height: 10%;
		border-radius: 50%;
	}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">社会契約説<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">トマス・ホッブス（1588-1679)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<circle class="social-area" cx="314" cy="314" r="210"/>
			<ellipse class="connect-line connect-line--m d-none fadein-3" cx="323" cy="312" rx="120" ry="100"/>
			<g class="work-arrow d-none fadein-2">
				<line x1="273" y1="312.4" x2="373.5" y2="312.4"/>
				<polygon points="370,317.5 389,312.4 370,307.3 			"/>
				<!-- <line x1="272" y1="304.7" x2="372.5" y2="304.7"/>
				<polygon points="369,309.8 388,304.7 369,299.6 				"/>
				<line x1="388" y1="323.3" x2="287.5" y2="323.3"/>
				<polygon points="291,318.2 272,323.3 291,328.4 				"/> -->
			</g>
		</svg>
		<div class="object--circle government government--1 d-none fadein-1">
			<div class="object-text">国家</div>
		</div>
		<div class="object--circle citizen citizen--1">
			<div class="object-text">人民</div>
		</div>
		<div class="word word--1 d-none fadein-2">統治</div>
		<div class="word word--2 d-none fadein-3">社会契約</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text">
			<span class="single-diagram__content__text__1 animation-text">ルールのない自然状態でお互いの権利を主張すれば、際限なく争いが起こる（万人の万人に対する争い）。</span>
			<span class="single-diagram__content__text__2 animation-text">そこで、ルールを破るものがいたら取り締まる強い権力が必要となってくる。それこそが国家であり、人々は国家に権利を譲りわたす社会契約を結でいる。</span>
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
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.fadein-1').fadeIn(1000);
			$('.single-diagram__content__text__2').addClass('is-animation-text');
			setTimeout(function(){
				$('.fadein-2').fadeIn(1000);
				setTimeout(function(){
					$('.fadein-3').fadeIn(1000);
				}, 1000);
			}, 1000);
		}, 3000);
	}, 1000);
</script>
<?php include("../../parts/footer.php"); ?>
