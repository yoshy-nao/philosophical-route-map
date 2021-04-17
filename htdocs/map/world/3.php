<?php include("../../parts/header.php"); ?>
<?php $link = "#world-3";?>
<style>
.circle{
	fill:	#60B28B;
}
</style>
<div class="single-diagram">
	<!-- タイトル -->
	<h2 class="single-diagram__title ">アルケー【空気】<br><a href="/map/index.php<?=$link?>" class="single-diagram__subtitle">アナクシメネス(B.C.585-B.C.525)</a></h2>
	<!-- タイトルここまで-->
	<!-- ボックス -->
	<div class="single-diagram__box">
    <a href="#" class="reset-button"><img src="/common/img/reset.svg"></a>
		<svg width="628" height="628" viewBox="0 0 628 628">
			<path class="circle" d="M400,314c0,2.9-0.1,13.7-3.9,25.6c-8.1,26-30.6,48.4-56.6,56.6c-11.9,3.7-22.7,3.9-25.6,3.9s-13.7-0.1-25.6-3.9c-26-8.1-48.4-30.6-56.6-56.6c-3.7-11.9-3.9-22.7-3.9-25.6c0-2.9,0.1-13.7,3.9-25.6c8.1-26,30.6-48.4,56.6-56.6c11.9-3.7,22.7-3.9,25.6-3.9s13.7,0.1,25.6,3.9c26,8.1,48.4,30.6,56.6,56.6C399.9,300.3,400,311.1,400,314z"/>
		</svg>
		<div class="object-text fadeout-1 c-black">空気</div>
		<div class="object-text fadein-1 d-none c-black">万物</div>
	</div>
	<!-- ボックスここまで -->
	<!-- テキスト -->
	<div class="single-diagram__content ">
		<p class="single-diagram__content__text"><span class="single-diagram__content__text__1 animation-text">万物の根源は空気である。死人は呼吸をしないことから、古代ギリシアでは息は生命そのものであると考えられていた。</span></p>

	</div>
	<!-- ボックスここまで -->
	<!-- サイドメニュー -->
	<?php include("sidemenu.php"); ?>
	<!-- サイドメニューここまで -->
</div>
<script>
$(function(){
let $svg = $('#svg'),
$pass = Snap('.circle'),
pathStart = 'M400,314c0,2.9-0.1,13.7-3.9,25.6c-8.1,26-30.6,48.4-56.6,56.6c-11.9,3.7-22.7,3.9-25.6,3.9s-13.7-0.1-25.6-3.9c-26-8.1-48.4-30.6-56.6-56.6c-3.7-11.9-3.9-22.7-3.9-25.6c0-2.9,0.1-13.7,3.9-25.6c8.1-26,30.6-48.4,56.6-56.6c11.9-3.7,22.7-3.9,25.6-3.9s13.7,0.1,25.6,3.9c26,8.1,48.4,30.6,56.6,56.6C399.9,300.3,400,311.1,400,314z',
pathEnd = 'M233.1,340.5v-52.9c0-30.1,24.4-54.4,54.4-54.4h52.9c30.1,0,54.4,24.4,54.4,54.4v52.9c0,30.1-24.4,54.4-54.4,54.4h-52.9C257.5,394.9,233.1,370.5,233.1,340.5z',
	SPEED = 1500,
	EASING = mina.easeout;

	setTimeout(function(){
		$pass.animate({d:pathEnd},SPEED,EASING);
		$('.fadeout-1').fadeOut();
		$('.single-diagram__content__text__1').addClass('is-animation-text');
		setTimeout(function(){
			$('.circle').css('transition', 'all 1.5s');
			$('.circle').css('fill', '#78c1bd');
			$('.fadein-1').fadeIn();
		}, 1500);
	}, 2000);
});
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