jQuery(window).load(function () {
    "use strict";
   	jQuery("#status").fadeOut();
	jQuery("#preloader").delay(350).fadeOut("slow");
});

/* mail function */
$('#em_sub').click(function(){
	var un=$('#uname').val();
	var em=$('#uemail').val();
	var meesg=$('#message').val();
	 $.ajax({
            type: "POST",
            url: "ajaxmail.php",
            data: {
				'username':un,
				'useremail':em,
				'mesg':meesg,
				},
            success: function(msg) {
			var full_msg=msg.split("#");
				if(full_msg[0]=='1')
				{
					$('#uname').val("Your Name");
					$('#uemail').val("Your Email");
					$('#message').val("Your message");
					$('#err').html( full_msg[1] );
				}
				else
				{
					$('#uname').val(un);
					$('#uemail').val(em);
					$('#message').val(meesg);
					$('#err').html( full_msg[1] );
				}
			
			}
		});
});


/* Portfolio */
	  if ($.fn.mixitup) {
	      $('#grid').mixitup( {
	        filterSelector: '.filter-item'
	      } );
	      $(".filter-item").click(function(e) {
	      	e.preventDefault();
	      })
	  }



$(function() {
			var pull 		= $('#pull');
				menu 		= $('.hs_nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
		
		
		


$( document ).ready(function() {
	
	$('.hs_nav li').mouseenter(function(){
        
				$(this).children('ul').stop().slideDown(500);
			});
			
			$('.hs_nav li').mouseleave(function(){
				
				$(this).children('ul').stop().slideUp(500);
			});
		
		
		
		
		
		
		
		
		
		/*********color change script*******/
		$('.colorchange').click(function(){
		var color_name=$(this).attr('id');
		var new_style='css/color/'+color_name+'.css';
		$('#theme-color').attr('href',new_style);
		});
		
		$('.pattern_change').click(function(){
		var name=$(this).attr('id');
		var new_style='css/pattern/'+name+'.css';
		$('#theme-pattern').attr('href',new_style);
		});

	//rotate setting gear 
	$(function() {

		var $rota = $('#style-switcher .bottom a.settings img'),
			degree = 0,
			timer;
	
		function rotate() {    
			$rota.css({ transform: 'rotate(' + degree + 'deg)'});
			// timeout increase degrees:
			timer = setTimeout(function() {
				++degree;
				rotate(); // loop it
			},0);
		}
	
		rotate();    // run it!
	
	});


$("#style-switcher .bottom a.settings").click(function(e){
			e.preventDefault();
			var div = $("#style-switcher");
			if (div.css("left") === "-160px") {
				$("#style-switcher").animate({
					left: "0px"
				}); 
			} else {
				$("#style-switcher").animate({
					left: "-160px"
				});
			}
		});
		
		
/******color change script end******/
		
		
		
		
		
		//sidebar tab
		
		$('.hs_post_tab > ul').each(function(){
			// For each set of tabs, we want to keep track of
			// which tab is active and it's associated content
			var $active, $content, $links = $(this).find('a');
		
			// If the location.hash matches one of the links, use that as the active tab.
			// If no match is found, use the first link as the initial active tab.
			$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
			$active.addClass('active');
		
			$content = $($active[0].hash);
		
			// Hide the remaining content
			$links.not($active).each(function () {
			  $(this.hash).hide();
			});
		
			// Bind the click event handler
			$(this).on('click', 'a', function(e){
			  // Make the old tab inactive.
			  $active.removeClass('active');
			  $content.hide();
		
			  // Update the variables with the new link and content
			  $active = $(this);
			  $content = $(this.hash);
		
			  // Make the tab active.
			  $active.addClass('active');
			  $content.fadeToggle(500);
		
			  // Prevent the anchor's default click action
			  e.preventDefault();
			});
		  });
				
		
		
		
		
		
		
		
		
	
		// index-box menu width
		var pathname = window.location.pathname;
		if(pathname.match('index-box')){
			$('.hs_menu_wraper').css('width','auto');
			$('.hs_menu_wraper > .container').css('margin-left','-15px');
			$('#bx-pager').css('margin-left','-15px');
		}
	
		
		
		//sidebar categoury dropdown
		$(".hs_category > ul > li").toggle(
		function() {
			$(this).children('ul').slideDown();
			$(this).children('a').children('span').removeClass('glyphicon-hand-right').addClass('glyphicon-hand-down');
		}, 
		function() {
			$(this).children('ul').slideUp();
			$(this).children('a').children('span').removeClass('glyphicon-hand-down').addClass('glyphicon-hand-right');
		});
			
			
			
	
		
		
		$('.bxslider').bxSlider({
		  pagerCustom: '#bx-pager',
		  auto: true
		});
		
		
						// search box
							var searchPopup = $('.hs_search_box');
								searchPopup.isShowed = false;
	
								$('#hs_search').hover(function(event) {
									showSearchPopup();
								}, function(event) {
									hideSearchPopup();
								});
	
								function showSearchPopup()
								{
									searchPopup.stop(true, true);
									searchPopup.isShowed = true;
									searchPopup.slideDown('normal');
								}
	
								function hideSearchPopup()
								{
									var divHovered = '0';
									$('.hs_search_box').hover(function(event) {
										divHovered = '1';
										showSearchPopup();
									}, function(event) {
										searchPopup.stop(true, true);
										searchPopup.delay(200).slideUp('fast', function() {
											searchPopup.isShowed = false;
										});
									});
	
									if (divHovered == '0')
									{
										searchPopup.stop(true, true);
										searchPopup.delay(200).slideUp('fast', function() {
											searchPopup.isShowed = false;
										});
									}
								}	
			
			
			
			
			
			
			
			
			
			
			
		
		
		
		
		$('.hs_our_team > ul > li').mouseenter(function(){
        
				$(this).children('.hs_team_overlay').stop().fadeIn(500);
			});
			
			$('.hs_our_team > ul > li').mouseleave(function(){
				
				$(this).children('.hs_team_overlay').stop().fadeOut(500);
		});
		
		
		// Featurede Post hover
		$('.hs_featured_post').mouseenter(function(){
        
				$(this).children('.hs_team_overlay').stop().fadeIn(500);
			});
			
			$('.hs_featured_post').mouseleave(function(){
				
				$(this).children('.hs_team_overlay').stop().fadeOut(500);
		});
		
		
		// Blog hover
		$('.hs_blog_group > div').mouseenter(function(){
        
				$(this).children('.hs_blog_hover').stop().fadeIn(500);
			});
			
			$('.hs_blog_group > div').mouseleave(function(){
				
				$(this).children('.hs_blog_hover').stop().fadeOut(500);
		});
	
		//Blog Load More Click	
		var count = 0;
		$('.hs_load_more > a').click(function(){
			$('.hs_blog_group_hide:eq('+count+')').slideDown(500);
			count++;
		});
	
		
});
		
