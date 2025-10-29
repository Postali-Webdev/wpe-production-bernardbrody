/**
 * Theme scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

/**
 * Theme scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";
	
	  // global vars
	  var navHeight = $('#more-nav > .menu').outerHeight();
  
	  	//more button animation
		var moremobile = $('#more-button-mobile');
			moremobile.click(function() {
			moremobile.toggleClass('active');
			return false;
		});  

		//more button animation
		var moredesktop = $('#more-button-desktop');
			moredesktop.click(function() {
			moredesktop.toggleClass('active');
			return false;
		}); 

		//Toggle mobile menu & search
	    $('.toggle-nav').click(function() {
			$('#menu-main-menu').slideToggle(100);
			$('#more-nav').slideToggle(100);
	   });
	   //Close navigation on anchor tap
		$('.toggle-nav.active').click(function() {	
			$('#menu-main-menu').slideUp(100);	 
			$('#more-nav').slideUp(100);
	   });	
	   //Mobile menu accordion toggle for sub pages - main menu
	   	$('.menu-main > ul > li.menu-item-has-children').append('<div class="accordion-toggle"><span class="icon-drw-chevron-down"></span></div>');
	   	$('.menu-main .accordion-toggle').click(function() {
			$(this).parent().find('> ul').slideToggle(200);
			$(this).toggleClass('toggle-background');
			$(this).find('.fa').toggleClass('toggle-rotate');
	   });
	   //Mobile menu accordion toggle for sub pages - more menu
	   $('#more-nav > ul > li.menu-item-has-children').append('<div class="accordion-toggle"><span class="icon-drw-chevron-down"></span></div>');
	   $('#more-nav .accordion-toggle').click(function() {
		$(this).parent().find('> ul').slideToggle(200);
		$(this).toggleClass('toggle-background');
		$(this).find('.fa').toggleClass('toggle-rotate');
   });

   // script to make accordions function
	$(".accordions").on("click", ".accordions_title", function() {
        // will (slide) toggle the related panel.
        $(this).toggleClass("active").next().slideToggle();
    });

   //keeps menu expanded so user can tab through sub-menu, then closes menu after user tabs away from last child
	$(document).ready(function() {
		$('.menu-item-has-children').on('focusin', function() {
			var subMenu = $(this).find('.sub-menu');
			subMenu.css('display', 'block');

			$(this).find('.sub-menu > li:last-child').on('focusout', function() {
				console.log('blur!');
				subMenu.css('display', 'none');
			});
		});

        $('.menu-item-has-children').on('mouseover', function() {
			var subMenu = $(this).find('.sub-menu');
			subMenu.css('display', 'block');

			$(this).on('mouseout', function() {
				console.log('blur!');
				subMenu.css('display', 'none');
			});
		});
	});
  
  });