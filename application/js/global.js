// Show Hide Mobile Menu
jQuery(document).ready(function(){
		jQuery('.show_hide_menu').click(function(){
			jQuery('#header_section .menu').slideToggle('');
			jQuery('.show_hide_menu').toggleClass('on');
			//jQuery('#mainNav .menu-sub').toggleClass('menu-sub');
			
		});
});

//Sticky Menu
//$(document).ready(function() {
//var stickyNavTop = $('#menuBLK').offset().top;
// //console.log(stickyNavTop);
//var stickyNav = function(){
//var scrollTop = $(window).scrollTop();
//      
//if (scrollTop > stickyNavTop) { 
//    $('#menuBLK').addClass('sticky');
//} else {
//    $('#menuBLK').removeClass('sticky'); 
//}
//};
// 
//stickyNav();
// 
//$(window).scroll(function() {
//  stickyNav();
//});
//});
// Mobile and web related queries
$(function() {
	var width = $(window).width();
	if (width < 721) {
//		$('#demo_btn').insertBefore('#mobile_menu_btn');
//		$('#ftLogoBlk, .smallNav, #quickContact').remove();
//		$('#rightInclude h4').addClass("accordionButton");
//		$('#rightInclude .mobileWrap').addClass("accordionContent");
//		$('#searchForm').insertAfter('.headerBlock');
//		$('#indexPortfolio').insertAfter('#indexSubFooter .fivecol');
//		$('#prepressIndexSec').insertAfter('#packageIndexSec');
//		$('#tabs').prepend($('#tabs ul'));
//		$('#portfolioFeatures').addClass('slider');
//		$('#portfolioFeatures.slider').bxSlider({
//	   pager : false, hideControlOnEnd : true, minSlides : 1, maxSlides : 1, slideWidth : 300, infiniteLoop : true, auto: true,
//	   });
		
	}
	else if (width > 721) {

	}
	else	{
		
	}
});