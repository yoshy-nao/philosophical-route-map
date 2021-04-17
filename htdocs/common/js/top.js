$(function(){

	console.log(document.cookie);

	var svg = Snap('#svgField');
	var baseLength = 3.1;
	var vw = 25.6;

	$('.table__button').on('click', function(){
		if($(this).hasClass('open')) {
			$(this).removeClass('open');
			$('.table__list').slideUp(300);
			$('.table__button img').css('transform', 'translate(-50%, -50%) rotate(180deg)');
		} else {
			$(this).addClass('open');
			$('.table__list').slideDown(300);
			$('.table__button img').css('transform', 'translate(-50%, -50%) rotate(0)');
		}
	},)

	$.ajax({
		url:'data.xml',
		type:'GET',
		dataType:'xml',
		success: function(xml) {

			$(xml).find('event').each(function(){
				var eventX = $(this).attr('x');
				var eventLeft = baseLength * eventX;
				var eventName = $(this).text();
				var birth = $(this).attr('birth');
				var top = birth * 0.45 + 650 * 0.45;
				$('.top-container').append(`<div class="outof event" style="top:${top}vw;left:${eventLeft}vw">${eventName}</div>`)
			});

			$(xml).find('group').each(function(){
				var groupX = $(this).attr('x');
				var left = baseLength * groupX;
				var groupName = $(this).text();
				var birth = $(this).attr('birth');
				var top = birth * 0.45 + 650 * 0.45;
				$('.top-container').append(`<div class="outof group-name" style="top:${top}vw;left:${left}vw">${groupName}</div>`)
			});

			$(xml).find('data').each(function(){
				var name = $(this).text();
				var nameX = $(this).attr('x');
				var nameLeft = baseLength * nameX;
				var birth = $(this).attr('birth');
				var top = birth * 0.45 + 650 * 0.45;
				var side = $(this).attr('side');
				$('.top-container').append(`<div class="name ${side}" style="top:${top}vw;left:${nameLeft}vw">${name}</div>`)
			});

			$(xml).find('concept').each(function(){
				var conceptX = $(this).attr('x');
				var conceptLeft = baseLength * conceptX;
				var conceptName = $(this).text();
				var genre = $(this).attr('genre');
				var link = $(this).attr('link');
				var birth = $(this).attr('birth');
				var top = birth * 0.45 + 650 * 0.45;
				var type = $(this).attr('type');
				var id = $(this).attr('id');
				$('.top-container').append(`<div id="${id}" class="concept ${type}" style="top:${top}vw;left:${conceptLeft}vw"><a href="${link}" class="concept__box ${genre}"></a><div class="concept__name">${conceptName}</div></div>`);
			});

			$(xml).find('line').each(function(){
				var data = $(this).attr('data');
				// console.log(data);
				if(data == 'repulsion') {
					var lineType = data;
				}else if(data == 'hint') {
					var lineType = data;
				}else{
					var lineType = 'develop-line--' + data;
				}
				// console.log(lineType);
				var p1 = $(this).attr('p1');
				var p2 = $(this).attr('p2');
				var viaX = $(this).attr('viaX');
				var viaY = $(this).attr('viaY');
				var p1xml = null;
				var p2xml = null;
				// var lineType = $(this).attr('lineType');
				var kind = $(this).attr('kind');
				$(xml).find('concept').each(function(){
					if ($(this).attr("id") == p1){
						p1xml = $(this);
					}else if($(this).attr("id") == p2){
						p2xml = $(this);
					}
				});
				if(p1xml != null && p2xml != null){
					var conceptX = p2xml.attr('x');
					var x2 = conceptX * vw * baseLength;
					var birth = p2xml.attr('birth');
					var y2 = birth * 0.45 * vw + 650 * 0.45 * vw;
					var conceptX = p1xml.attr('x');
					var x1 = conceptX * vw * baseLength;
					var birth = p1xml.attr('birth');
					var y1 = birth * 0.45 * vw + 650 * 0.45 * vw;
					var xv = (conceptX - (-viaX)) * vw * baseLength;
					var yv = (birth - (-viaY)) * 0.45 * vw + 650 * 0.45 * vw;
					svg.polyline(x1, y1, xv, yv, x2, y2).addClass(`line ${lineType}`).attr('data-type', `${data}`);
				}
			});

			$(xml).find('connect').each(function(){
				var p1 = $(this).attr('p1');
				var p1xml = null;
				var lineType1 = $(this).attr('lineType1');
				var lineType2 = $(this).attr('lineType2');
				$(xml).find('concept').each(function(){
					if ($(this).attr("id") == p1){
						p1xml = $(this);
					}
				});
				if(p1xml != null){
					var conceptX = p1xml.attr('x');
					var x1 = conceptX * vw * baseLength;
					var birth = p1xml.attr('birth');
					var y1 = birth * 0.45 * vw + 650 * 0.45 * vw;
					var radius = vw * baseLength / 2;
					svg.line(x1, y1, x1 + radius , y1).addClass(`line ${lineType1} develop`);
					svg.line(x1 + radius, y1, x1 + radius * 2, y1).addClass(`line ${lineType2} develop`);
				}
			});
			$(xml).find('lineText').each(function(){
				var data = $(this).attr('data');
				var text = $(this).text();
				$('body').append(`<div class="line-text" data-type=${data}>${text}</div>`);
			});
		}
	});

	$(document).on({
		'mouseenter': function() {
			var enterObject = $(this).find('.concept__name');
			sethover = setTimeout(function(){
				enterObject.fadeIn(500);
			},300);
		},
		'mouseleave': function() {
			$(this).find('.concept__name').fadeOut(300);
			clearTimeout(sethover);
		}
	}, '.concept');

	window.onmousemove = function (e) {
		// var mouseX, mouseY;
		 if (e) {
			mouseX = e.pageX;
			mouseY = e.pageY;
		 } else {
			mouseX = event.pageX + document.body.scrollLeft;
			mouseY = event.pageY + document.body.scrollTop;
		 }
		 $('.line-text').css('left', mouseX);
		 $('.line-text').css('top', mouseY);
	};

	$(document).on({
		'mouseenter': function() {
			var data = $(this).data('type');
			$('.line-text').each(function(){
				if($(this).data('type') == data) {
					var enterObject = $(this);
					sethover = setTimeout(function(){
						enterObject.fadeIn(500);
					},300);
				}
			});
		},
		'mouseleave': function() {
			$('.line-text').fadeOut();
			clearTimeout(sethover);
		}
	},'.line');

	var $wnd = $(window);
	$wnd.scroll(function() {
		scrolltopCenter = $wnd.scrollTop() + window.innerHeight / 2 + 'px';
		scrollleftCenter = $wnd.scrollLeft() + window.innerWidth / 2 + 'px';
		$('.top-container').css('transform-origin', `${scrollleftCenter} ${scrolltopCenter}`);
		scrolltop = $wnd.scrollTop();
		var lochref = window.location.href;
		if ( lochref.indexOf('map/index.php') > -1 ) {
			document.cookie = `scrolltop=${scrolltop};max-age = 60 * 3`;
		}
		if(scrolltop == 0) {
			$('.map-scroll').fadeIn();
		} else {
			$('.map-scroll').fadeOut();
		}
	});

	$("#slider").on("input",function(){
		var range = document.querySelector('input[type="range"]');
		var rangeValue = range.value;
		var scale = rangeValue / 1000;
		$('.top-container').css('transform', `scale(${scale}) rotate(0.001deg)`);
		var yearsWidth = 1 / scale * 100 + '%';
		$('.years').css('width', `${yearsWidth}`);
		var b = 40 * (rangeValue / 1000);
		document.cookie = `value=${rangeValue};max-age = 60 * 3`;
		if(rangeValue <= 500) {
			$('.event').fadeIn();
			$('.year-box__element').css('font-size', '2.2vw');
		} else if(rangeValue <= 700) {
			$('.event').fadeOut();
			$('.year-box__element').css('font-size', '2vw');
		} else {
			$('.event').fadeOut();
			$('.year-box__element').css('font-size', '');
		}
		if(rangeValue <= 700) {
			$('.concept__box').css('width', '1vw');
			$('.concept__box').css('height', '1vw');
			$('.concept__box').css('border', 'none');
			$('.concept__box').css('pointer-events', 'none');
			$('.concept__box').css('border', 'none');
			$('.line').css('opacity', '0.2');
			$('.line').css('pointer-events', 'none');
			$('.line').css('stroke-width', `${b}`);
			$('.name').css('font-size', '1.6vw');
			$('.name').css('background-color', '#222');
			$('.group-name').fadeIn();
			$('.group-box').fadeIn();
			$('.sub').find('a').css('background-color', '#555');
		} else {
			$('.line').css('stroke-width', '');
			$('.line').css('pointer-events', 'auto');
			$('.line').css('opacity', '');
			$('.name').css('font-size', '');
			$('.name').css('background-color', '');
			$('.concept__box').css('width', '');
			$('.concept__box').css('height', '');
			$('.concept__box').css('border', '');
			$('.concept__box').css('pointer-events', 'auto');
			$('.group-name').fadeOut();
			$('.group-box').fadeOut();
			$('.sub').find('a').css('background-color', '');
		}
	});

});
var scrolltopCenter;
var scrollleftCenter;
