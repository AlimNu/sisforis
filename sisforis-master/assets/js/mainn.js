// JavaScript Document
$(document).ready(function() {
	"use strict";
    $('.menu li:has(ul)').click(function(e){
		e.preventDefault();
		
		if ($(this).hasClass('activate')){
			$(this).removeClass('activate');
			$(this).children('ul').slideDown();
			$(this).children('ul ').slideUp();		
		} else {
			
			//$('.menu li ul').slideUp();
			//$('.menu li ul li').removeClass('activate');
			$(this).addClass('activate');
			$(this).children('ul').slideDown();
			$(this).children('ul').children('ul li ul').slideUp();
			
		}
		
		
	});
	
	
	
	$('.btn-menu').click(function(){
		$('.container-menu .menu').slideToggle();
	});
	
	/*$(window).resize(function(){
		if($(document).width()>450){
			if($('.container-menu .menu').css({'display' : 'block'});
			}
	});*/
});