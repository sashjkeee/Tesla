var confPack = false;
$(document).ready(function() {
	// timer();
	popUpHide();


	$(function(){ $('.flipster').flipster({
		enableNavButtons: true
		}); 
	});

	$.stellar();

	$('.confPack').click(function() {
      confPack = true;
    });

	var prefix = $('.prefix').val();
	var url = prefix+"send.php";

	var mobile = navigator.userAgent.toLowerCase().match(/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i);

	if(mobile != null) {
		$('html').css('width', window.innerWidth + 'px');
		$('.covervid-video').remove();
	} else {
		$(".scroll").each(function() {
			var block = $(this);
			$(window).scroll(function() {
				var top = block.offset().top;
				var bottom = block.height()+top;
				top = top - $(window).height();
				var scroll_top = $(this).scrollTop();
				var block_center = block.offset().top + (block.height() / 2);
				var screen_center = scroll_top + ($(window).height() / 2);
				if(block.height() < $(window).height()) {
					if ((scroll_top > top) && (scroll_top < bottom) && (scroll_top + $(window).height() > bottom)) {
						if (!block.hasClass("animated")) {
							block.addClass("animated");
						}
					} else {
						if((block.offset().top + block.height() < scroll_top) || (block.offset().top > (scroll_top + $(window).height()))) {
							block.removeClass("animated");
						}
					}
				} else {
					if ((scroll_top > top) && (scroll_top < bottom) && (Math.abs(screen_center - block_center) < (block.height() / 4))) {
						if (!block.hasClass("animated")) {
							block.addClass("animated");
						}
					} else {
						if((block.offset().top + block.height() < scroll_top) || (block.offset().top > (scroll_top + $(window).height()))) {
							block.removeClass("animated");
						}
					}
				}
			});
		});
		$('head').append('<link rel="stylesheet" href="'+prefix+'css/animation.css" />');
	}

	$('.button').click(function() {
		$('body').find('form:not(this)').children('label').removeClass('red');
		var request_url = '\n'+$('input[name="ref_url"]').val().toString().replace(/&/g, '\n');
		var colors = 0;
		var answer = checkForm($(this).parent().get(0));
		if(answer != false)
		{
			var $form = $(this).parent(),
				name = $('input[name="name"]', $form).val(),
				phone = $('input[name="phone1"]', $form).val()+' '+$('input[name="phone2"]', $form).val()+' '+$('input[name="phone3"]', $form).val(),
				email = $('input[name="email"]', $form).val(),
				ques = $('textarea[name="ques"]', $form).val(),
			

				sbt = $('.btn', $form).attr("data-name"),
				submit = $('.btn', $form).val();
			if (confPack == true) {
				var colors = $('#colors .active').attr('data-color-name');
				var roof = $('#roofs .active').attr('data-roof-name');
				var wheel = $('#wheels .active').attr('data-wheel-name');
				var config = $('#config .active').attr('data-config-name');
			}
			else {
				var colors = 0;
				var roof = 0;
				var wheel = 0;
				var config = 0;
			}
			var ref = $('input[name="referer"]').val();
			var formname = $('input[name="formname"]').val();
			$.ajax({
				type: "POST",
				url: url,
				dataType: "json",
				data: "name="+name+"&phone="+phone+"&"+sbt+"="+submit+"&email="+email+"&ques="+ques+"&formname="+formname+"&ref="+ref+"&utm="+request_url+"&coloract="+colors+"&roofact="+roof+"&wheelact="+wheel+"&configact="+config
			}).always(function() {
				thx();
				//метрики
				//ga('send', 'event', ''+sbt, ''+sbt);
				//yaCounter25134455.reachGoal(''+sbt);
			});
		}
	});

	/* Youtube fix */
	// $("iframe").each(function() {
	// 	var ifr_source=$(this).attr('src');
	// 	var wmode="wmode=transparent";
	// 	if(ifr_source.indexOf('?')!=-1) {
	// 		var getQString=ifr_source.split('?');
	// 		var oldString=getQString[1];
	// 		var newString=getQString[0];
	// 		$(this).attr('src',newString+'?'+wmode+'&'+oldString)
	// 	} else $(this).attr('src',ifr_source+'?'+wmode)
	// });

	$('input[name="phone2"]').focus(function() {
		$(this).keyup(function(){
			if($(this).val().length >= 3)
				$(this).parent().siblings().find('input[name="phone3"]').focus();
		});
	});
});

$(window).resize(function(){
	var Mtop = -($('.activePopup').outerHeight() / 2) + 'px';
	var Mleft = -($('.activePopup').outerWidth() / 2) + 'px';
	$('.activePopup').css({
		'margin-top' : Mtop,
		'margin-left' : Mleft,
		'left' : '50%',
		'top' : '50%'
 	});
});

// function timer()
// {
// 	var now = new Date();
// 	var newDate = new Date((now.getMonth()+1)+"/"+now.getDate()+"/"+now.getFullYear()+" 23:59:59"); //var newDate = new Date("Feb,29,2014 23:59:00");
// 	var totalRemains = (newDate.getTime()-now.getTime());
// 	if (totalRemains>1)
// 	{
// 		var Days = (parseInt(parseInt(totalRemains/1000)/(24*3600)));
// 		var Hours = (parseInt((parseInt(totalRemains/1000) - Days*24*3600)/3600));
// 		var Min = (parseInt(parseInt((parseInt(totalRemains/1000) - Days*24*3600) - Hours*3600)/60));
// 		var Sec = parseInt((parseInt(totalRemains/1000) - Days*24*3600) - Hours*3600) - Min*60;
// 		if (Days<10){Days="0"+Days}
// 		if (Hours<10){Hours="0"+Hours}
// 		if (Min<10){Min="0"+Min}
// 		if (Sec<10){Sec="0"+Sec}
// 		$(".day").each(function() { $(this).text(Days); });
// 		$(".hour").each(function() { $(this).text(Hours); });
// 		$(".min").each(function() { $(this).text(Min); });
// 		$(".sec").each(function() { $(this).text(Sec); });
// 		setTimeout(timer, 1000);
// 	}
// }

function popup(id, form, h1, h2, btn) { //onClick="popup('callback', '', '', '', '');"
	$('.popup_overlay').show();
	$('#'+id).addClass('activePopup');
	if(id == 'callback') {
		var def_h1 = 'Заказать звонок';
		var def_h2 = 'Оставьте заявку, и&nbsp;наш менеджер<br>свяжется с&nbsp;вами в&nbsp;ближайшее время';
		var def_btn = 'Заказать звонок';
	}
	if(id == 'request') {
		var def_h1 = 'Оставить заявку';
		var def_h2 = 'Заполните форму,<br>и&nbsp;мы&nbsp;обязательно свяжемся с&nbsp;вами!';
		var def_btn = 'Оставить заявку';
	}
	if(id == 'question') {
		var def_h1 = 'Задать вопрос';
		var def_h2 = 'Заполните форму,<br>и&nbsp;мы&nbsp;обязательно свяжемся с&nbsp;вами!';
		var def_btn = 'Задать вопрос';
	}
	if(h1 != '') {$('#'+id).find('.popup_h1').html(h1);} else {$('#'+id).find('.popup_h1').html(def_h1);}
	if(h2 != '') {$('#'+id).find('.popup_h2').html(h2);} else {$('#'+id).find('.popup_h2').html(def_h2);}
	if(btn != '') {$('#'+id).find('.btn').val(btn);} else {$('#'+id).find('.btn').html(def_btn);}
	var Mtop = -($('.activePopup').outerHeight() / 2) + 'px';
	var Mleft = -($('.activePopup').outerWidth() / 2) + 'px';
	$('.activePopup').css({
		'margin-top' : Mtop,
		'margin-left' : Mleft,
		'left' : '50%',
		'top' : '50%'
	});
	$('.activePopup').show();
	$('.formname').attr("value", form);
}

function popup_out() {
	$('.popup_overlay').hide();
	$('.popup').hide();
	$('.popup').removeClass('activePopup');
	$('body').find('label').removeClass('red');
	confPack = false;
}

function formname(name) { //onClick="formname('text');"
	$('.formname').attr("value", name);
}

function thx() {
	$('.popup').hide();
	$('.popup').removeClass('activePopup');
	popup('thx', '');
	$('input[type="text"]:not(input[name="phone1"])').each(function(){
		$(this).val('');
	});
	$('textarea').val('');
}

// CONFIGURATOR

$('#config a').on('click', function(event) {
	event.preventDefault();        
	$('#config a').removeClass('active');
	$(this).toggleClass('active');
});
$('#colors a').click( function(event) {
	event.preventDefault();       
	$('#colors a').removeClass('active');
	$(this).toggleClass('active');
	switch ( $(this).parent().attr('id') ) {
		case 'black_col': $('#color').css('background-position', '0 -44px'); $('#view_housing').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'none').animate({opacity: 1}); });
		break;
		case 'white_col': $('#color').css('background-position', '0 0'); $('#view_housing').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'url("img/png/colors/white.png") no-repeat').animate({opacity: 1}); }); if ($('#roofs a.active').attr('data-roof-name') == 'solid') $('#view_roof').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'none').animate({opacity: 1}); });
		break;
		case 'silver_col': $('#color').css('background-position', '0 -133px'); $('#view_housing').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'url("img/png/colors/silver.png") no-repeat').animate({opacity: 1}); }); if ($('#roofs a.active').attr('data-roof-name') == 'solid') $('#view_roof').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'none').animate({opacity: 1}); });
		break;
		case 'gray_col': $('#color').css('background-position', '0 -177px'); $('#view_housing').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'url("img/png/colors/gray.png") no-repeat').animate({opacity: 1}); }); if ($('#roofs a.active').attr('data-roof-name') == 'solid') $('#view_roof').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'none').animate({opacity: 1}); });
		break;
		case 'blue_col': $('#color').css('background-position', '0 -220px'); $('#view_housing').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'url("img/png/colors/blue.png") no-repeat').animate({opacity: 1}); }); if ($('#roofs a.active').attr('data-roof-name') == 'solid') $('#view_roof').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'none').animate({opacity: 1}); });
		break;
		case 'green_col': $('#color').css('background-position', '0 -264px'); $('#view_housing').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'url("img/png/colors/green.png") no-repeat').animate({opacity: 1}); }); if ($('#roofs a.active').attr('data-roof-name') == 'solid') $('#view_roof').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'none').animate({opacity: 1}); });
		break;
		case 'brown_col': $('#color').css('background-position', '0 -308px'); $('#view_housing').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'url("img/png/colors/brown.png") no-repeat').animate({opacity: 1}); }); if ($('#roofs a.active').attr('data-roof-name') == 'solid') $('#view_roof').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'none').animate({opacity: 1}); });
		break;
		case 'white2_col': $('#color').css('background-position', '0 -88px'); $('#view_housing').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'url("img/png/colors/white_perl.png") no-repeat').animate({opacity: 1}); }); if ($('#roofs a.active').attr('data-roof-name') == 'solid') $('#view_roof').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'none').animate({opacity: 1}); });
		break;
		case 'red_col': $('#color').css('background-position', '0 -352px'); $('#view_housing').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'url("img/png/colors/red.png") no-repeat').animate({opacity: 1}); }); if ($('#roofs a.active').attr('data-roof-name') == 'solid') $('#view_roof').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'none').animate({opacity: 1}); });
		break;
	}
});
$('#roofs a').on('click', function(event) {
	event.preventDefault();        
	$('#roofs a').removeClass('active');
	$(this).toggleClass('active');
	switch ( $(this).parent().attr('id') ) {
		case 'solid_roof': $('#roof').css('background-position', '-240px 0'); $('#view_roof').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'none').animate({opacity: 1}); });
		break;
		case 'panoramic_roof': $('#roof').css('background-position', '-240px -44px'); $('#view_roof').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'url("img/png/roofs/panoramic.png") no-repeat').animate({opacity: 1}); });
		break;
	}
});
$('#wheels a').on('click', function(event) {
	event.preventDefault();        
	$('#wheels a').removeClass('active');
	$(this).toggleClass('active');
	switch ( $(this).parent().attr('id') ) {
		case 'basic_wheel': $('#wheel').css('background-position', '-240px -88px'); $('#view_wheels').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'url("img/png/wheels/19.png") no-repeat').animate({opacity: 1}); });
		break;
		case 'cyclone_wheel': $('#wheel').css('background-position', '-240px -133px'); $('#view_wheels').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'url("img/png/wheels/cyclon.png") no-repeat').animate({opacity: 1}); });
		break;
		case 'turbine_wheel': $('#wheel').css('background-position', '-240px -176px'); $('#view_wheels').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'url("img/png/wheels/turbine.png") no-repeat').animate({opacity: 1}); });
		break;
		case 'turbine2_wheel': $('#wheel').css('background-position', '-240px -221px'); $('#view_wheels').animate({opacity: 0}, 'slow', function() { $(this).css('background', 'url("img/png/wheels/turbine2.png") no-repeat').animate({opacity: 1}); });
		break;
	}
});
$('#dash a').on('click', function(event) {
	event.preventDefault();        
	$('#dash a').not(this).removeClass('active');
	$(this).toggleClass('active');

	switch ( $(this).text() ) {

		case "Цвет": 
			if ( $(this).hasClass("active") ) { 
				popUpHide();
				$('#colors').fadeIn();
			} else { 
				popUpHide(); 
			}
		break;

		case "Крыша":
			if ( $(this).hasClass("active") ) { 
				popUpHide();
				$('#roofs').fadeIn(); 
			} else { 
				popUpHide(); 
			}
		break;

		case "Колёса":
			if ( $(this).hasClass("active") ) { 
				popUpHide();
				$('#wheels').fadeIn(); 
			} else { 
				popUpHide(); 
			}
		break;
	}
});
$('#tray a').on('click', function(event) {
	event.preventDefault();

	switch ( $(this).attr('id') ) {

		case "color": 
			popUpHide();
			$('#colors').fadeIn();
			$('a:contains("Цвет")').addClass('active');
		break;

		case "roof":
			popUpHide();
			$('#roofs').fadeIn();
			$('a:contains("Крыша")').addClass('active');
		break;

		case "wheel":
			popUpHide();
			$('#wheels').fadeIn();
			$('a:contains("Колёса")').addClass('active');
		break;
	}
});
function popUpHide() {
        $("#colors, #roofs, #wheels").fadeOut();
    }