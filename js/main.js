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
			touchDrag  : false,
			mouseDrag  : false,
			animateOut: 'fadeOut',
			dots:false, 
			animateIn: 'fadeIn',
			autoplay:true, 
			autoplayTimeout: 10000,
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
		var menu_button = $(".toggle-button span")

		$(document).scroll(function() { 
			scroll_pos = $(this).scrollTop();
			console.log(scroll_pos); 
			if(scroll_pos > 1) {
				$(".main-navigation").addClass( "show-toggle-icon" );
				menu_button.css("display", "block")
			} else {
				$(".main-navigation").removeClass( "show-toggle-icon" );
				menu_button.css("display", "none")
			}
		});
	}

	openMenu(); 

	function openMenu(){
		var toggle_button = $(".toggle-button")
		var menu_panel = $(".menu-panel")
		var close_menu  =$(".menu-panel .close-icon")

		toggle_button.on("click", function(){
			menu_panel.addClass("open")
			// $("#locked").css("display", "block")
		})

		close_menu.on("click", function(){
			menu_panel.removeClass("open")
		})
	}
});