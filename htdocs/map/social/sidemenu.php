<ul class="side-menu">
	<div class="side-menu__back"><a href="../index.php<?=$link?>"><img src="/common/img/back.svg" class="side-menu__back__icon"><span class="side-menu__back__text">年表に戻る</span></a></div>
	<h2 class="side-menu__heading social">社会</h2>
</ul>
<script>
var category = 'social';
$.ajax({
	url:'/map/data.xml',
	type:'GET',
	dataType:'xml',
	success: function(xml) {

		$(xml).find('concept').each(function(){
			var conceptName = $(this).text();
			var genre = $(this).attr('genre');
			var link = $(this).attr('link');
			if( genre == category) {
				$('.side-menu').append(`<li class="side-menu__list"><a href="/map/${link}"><span class="side-menu__list__icon--${genre}"></span><span class="side-menu__list__text">${conceptName}</span></a></li>`)
			}
		});
	}
});
</script>
