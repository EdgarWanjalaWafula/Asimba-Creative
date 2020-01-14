/**
 * 
 * @author	Edgar Wanjala Wafula 
 * @url		http://www.printsasa.com
 * 
 * Website integration scripts
 */

'use strict'

jQuery(document).ready(function($){
	initSliders(); 
	// AOS.init({
	// 	duration: 2000,
	// });
	searchPanelInit(); 
	menuBarHide(); 

	function initSliders(){
		
		var clients_s 		= $(".owl-home-clients");
		var case_studies_s 	= $(".owl-home-case-studies");
		
		clients_s.owlCarousel({
			loop:true,
			margin:18,
			nav:true,
			navText:['<i class="icon ion-ios-arrow-back"></i>', '<i class="icon ion-ios-arrow-forward"></i>'], 
			autoplay:true, 
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:6
				}
			}
		})

		case_studies_s.owlCarousel({
			loop:true,
			margin:18,
			nav:false,
			dots:true, 
			navText:['<i class="icon ion-ios-arrow-back"></i>', '<i class="icon ion-ios-arrow-forward"></i>'], 
			autoplay:true, 
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:1
				}
			}
		})
		// hero_s.append("<div class='owl-custom-nav'><div class='container'></div></div>"); 
		// $(".owl-home .owl-nav").appendTo(".owl-custom-nav .container"); 
	}	

	function searchPanelInit(){
		var search_icon 		= $('.main-navigation i')
		var search_panel 		= $('.search-panel')
		var close_search_panel 	= $('.search-panel .close-icon')

		search_icon.on('click', function(){
			search_panel.addClass('open')
		})

		close_search_panel.on("click", function(){
			search_panel.removeClass('open')
		})
	}

	function menuBarHide(){
		var scroll_pos = 0;

		$(document).scroll(function() { 
			scroll_pos = $(this).scrollTop();
			console.log(scroll_pos); 
			if(scroll_pos > 1) {
				$(".main-navigation").addClass( "show-toggle-icon" );
			} else {
				$(".main-navigation").removeClass( "show-toggle-icon" );
			}
		});
	}
});