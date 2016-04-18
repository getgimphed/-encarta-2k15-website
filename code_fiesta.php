<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Encarta MBM 2015" />
<meta name="description" content="Encarta MBM 2015" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- favicon links -->
<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
<link rel="icon" type="image/ico" href="favicon.ico" />
<!--Google Web Fonts-->
<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'/>
<title>Encarta 2k15</title>
<!-- main css -->
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" id="theme-color" type="text/css" href="#"/>


<!-- Smooth Scroll -->
<script src="js/jquery.min.js" type="text/javascript"></script> 
<script src="js/jquery.mousewheel.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/smoothScroll.js"></script>
<script type="text/javascript">
   $(function () {
      $.srSmoothscroll()
    })
</script>

<!-- Preloader -->
<link rel="stylesheet" type="text/css" href="css/preloader/main.css">
<link rel="stylesheet" type="text/css" href="css/preloader/jpreloader.css">
<script type="text/javascript" src="js/preloader/jpreLoader.min.js"></script>
<script>
<!-- jPreLoader script -->

$(document).ready(function() {
  $('#wrapper').hide();
  $('header').css("top",-90);
  $('footer').css("bottom",-25);
  
  $('#control').children('span:not(clicked)').click(function() {
    $('.clicked').removeClass('clicked');
    $(this).toggleClass('clicked');
    var id = '#' + $(this).attr('id') + '-p';

    $('.current').fadeOut(500, function() {
      $(this).removeClass('current');
      $(id).addClass('current');
      $(id).fadeIn(500);
    });
  });
});

$(document).ready(function() {

  var timer;
  
  //calling jPreLoader function with properties
  $('body').jpreLoader({
    splashID: "#jSplash",
    splashFunction: function() {  //passing Splash Screen script to jPreLoader
      $('#jSplash').children('section').not('.selected').hide();
      $('#jSplash').hide().fadeIn(800);
      
      timer = setInterval(function() {
        splashRotator();
      }, 3000);
    }
  }, function() { //jPreLoader callback function
    clearInterval(timer);
    $('footer').animate({"bottom":0}, 500);
    $('header').animate({"top":0}, 800, function() {
      $('#wrapper').fadeIn(1000);
    });
  });
});
// End of jPreLoader script

function splashRotator(){
  var cur = $('#jSplash').children('.selected');
  var next = $(cur).next();
  
  if($(next).length != 0) {
    $(next).addClass('selected');
  } else {
    $('#jSplash').children('section:first-child').addClass('selected');
    next = $('#jSplash').children('section:first-child');
  }
    
  $(cur).removeClass('selected').fadeOut(800, function() {
    $(next).fadeIn(800);
  });
}
</script>
<!-- Preloader Script End -->
<!-- Scroll to top -->
<script>            
  jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
      if (jQuery(this).scrollTop() > offset) {
        jQuery('.crunchify-top').fadeIn(duration);
      } else {
        jQuery('.crunchify-top').fadeOut(duration);
      }
    });
 
    jQuery('.crunchify-top').click(function(event) {
      event.preventDefault();
      jQuery('html, body').animate({scrollTop: 0}, duration);
      return false;
    })
  });
</script>
</head>
<body>
<!--header start-->
<div class="container-fluid">
  <div class="hs_menu_wraper">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12"> 
          <!-- logo start-->
          <div class="col-lg-2 col-md-2 col-sm-2"> <a href="http://encartambm.in">
            <div class="hs_logo"><img src="images/encarta_logo.png" width="100"><sup class="hs_logo_num"></sup></div>
            </a> </div>
          <!--logo end--> 
              <!--menu start-->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="hs_nav">
              <ul class="clearfix">
                <li><a class="active" href="index.php" id="home" >Home</a>     </li>
                <li><a href="events.php">Events</a>
                  <ul class="hs_sub_menu">
                    <li><a href="code_fiesta.php">Code Fiesta </a></li>
                    <li><a href="creatrix.php">Creatrix</a></li>
                    <li><a href="grand_arcanum.php">Grand Arcanum</a></li>
                    <li><a href="tech_art.php">Tech Art</a></li>
                    <li><a href="ingenieur.php">Ingenieur</a></li>
                    <li><a href="quizzotica.php">Quizzotica</a></li>
                    <li><a href="gamezville.php">Gamezville</a></li>
                    <li><a href="prelims.php">Prelims</a></li>
                  </ul>
                </li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="register.php">Login/Register</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
              <a href="1" id="pull">Menu</a> </div>
          </div>
          <!--menu end--> 
          <!--social icon start-->
          <div class="col-md-2 col-md-2 col-sm-2">
            <div class="icons"> <a class="facebook" href="https://www.facebook.com/Encarta-2k15-1907469076144784/"></a><a class="googleplus" href="https://plus.google.com/u/3/104023683445593236078"></a></div>
          </div>
          <!--social icon end--> 
        </div>
      </div>
      <hr class="hs_divider"/>
      <div class="row hs_search_box">
        <form class="form-inline">
          <div class="form-group has-success has-feedback">
            <input type="text" class="form-control" placeholder="Search">
            <span class="glyphicon glyphicon-search form-control-feedback"></span> </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--header end-->
<div class="hs_margin_bottom_100" style="margin:140px;"></div>
<!--main container start-->
<div class="container">
   <div class="col-md-12 align-c pull-down-62 hs_portfolio portfolio_portfolio_short_item"> 
    <!-- /.title -->
    <ul class="push-down-62 portfolio-filter" data-scrollreveal="enter from the bottom over 1s but wait 0.5s" style="margin : 5px;">
      <li><a href="1" class="filter-item active" data-filter="all" style="font-family: 'Poiret One', cursive; font-weight:900; margin:30px; font-size:40px;" >CODE Fiesta</a></li>
     <!--  <li><a href="1" class="filter-item" data-filter="photography"><h2>Day1</h2></a></li>
      <li><a href="1" class="filter-item" data-filter="video"><h2>Day 2</h2></a></li>
      <li><a href="1" class="filter-item" data-filter="graphics"><h2>Day 3</h2></a></li> -->
      	  
    </ul>
    <!-- /.push-down-62 portfolio-filter --> 
  </div>
  <div class="clearfix"></div>
  <style type="text/css">
  p{
    color: #fff;
    }
    .portfolio-grid .portfolio-item:hover .portfolio-details {
    bottom: 0px !important;
    background: #222 ;
}
    </style>
  <div class="row push-down-62 portfolio-grid portfolio_portfolio_item" id="grid">
    
      <div class="col-md-4 col-sm-4 portfolio-item photography mix">
    	<img src="images/events/600/code_fiesta/1_code_marathon.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.5s" width="200">
        <div class="portfolio-details portfolio-details_2_column" >
          <h2 style="font-family: 'Poiret One', cursive;">CODE MARATHON</h2>	
          <!--<p>The problem set consists of 5 questions .</br>
  		   The participants would be given a time period of 2.5 hours to solve the questions. Languages to be used: C/C++/JAVA.</p>
               <p><h4> Participants : </h4></p>-->
        </div>
      </div>
      <!-- /.col-md-4 portfolio-item mix -->
      <div class="col-md-4 col-sm-4  portfolio-item video mix">
  	<img src="images/events/600/code_fiesta/2_code_struck.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.5s">
        <div class="portfolio-details portfolio-details_2_column">
          <h2 style="font-family: 'Poiret One', cursive;">CODE-STRUCK</h2>
          <!--<p>During the event you'll be provided with the documentation of the programming language you'll be required to use to solve a given problem.</br>
  		   The team who adapts to the new language and solves this problem first will be the winner.
  		</p>
          <p><h4> Participants : </h4></p>-->
        </div>
      </div>

    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-4 col-sm-4 portfolio-item graphics  mix"><img src="images/events/600/code_fiesta/3_flex_your_brain.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.5s">
      <div class="portfolio-details portfolio-details_2_column">
        <h2 style="font-family: 'Poiret One', cursive;">FLEX - YOUR - BRAIN</h2>
       <!-- <p>Participants have to implement the code for the given algorithms.
		   The languages to be used: C,C++, JAVA.</p>
         <p><h4> Participants : 2</h4></p>-->
      </div>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-4 col-sm-4 portfolio-item photography mix"><img src="images/events/600/code_fiesta/5_java_jumbos.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.6s">
      <div class="portfolio-details portfolio-details_2_column">
        <h2 style="font-family: 'Poiret One', cursive;">JAVA JUMBOS</h2>
       <!-- <p>This competition will require you and your teammate to modify a predetermined program code of an applet into an interactive Game.</br>
		   The team who prepares the best game in the given time will come out as the winner. Duration : 1 hour.
		</p>
         <p><h3> Participants : 2</h3></p>-->
      </div>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-4 col-sm-4 portfolio-item photography mix"><img src="images/events/600/code_fiesta/8_the_gauntlets.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.6s">
      <div class="portfolio-details portfolio-details_2_column">
        <h2 style="font-family: 'Poiret One', cursive;">THE GAUNTLET</h2>
        <!--<p>You'll be able to move on to the next question only when you'll be able to crack the current puzzle. </br>
		   Each question you'll solve will get you 10 points and each failed attempt you make to solve one will you get a negative point. Duration: 1 hour </p>
          <p><h3> Participants : 2</h3></p> -->
      </div>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-4 col-sm-4  portfolio-item video mix"><img src="images/events/600/code_fiesta/4_insomnia.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.6s">
      <div class="portfolio-details portfolio-details_2_column">
        <h2 style="font-family: 'Poiret One', cursive;">INSOMNIA</h2>
     <!--   <p>The problem set will consist of 5 questions. The participants would be given a time period of 12 hours to solve the questions. 
		    Languages to be used: C/C++/JAVA. </br>Duration : 12 hour</p>
         <p><h3> Participants : </h3></p> -->
      </div>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-4 col-sm-4 portfolio-item video mix"><img src="images/events/600/code_fiesta/7_predict_o_warrior.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.7s">
      <div class="portfolio-details portfolio-details_2_column">
        <h2 style="font-family: 'Poiret One', cursive;">PREDICTO -O WARRIOR</h2>
        <!--<p>The participants will have to hunt the errors or predict the output for the given code . Languages to be used: C/C++/JAVA. </br>Duration : 1 hour </p>
        <p><h3> Participants : </h3></p> -->
      </div>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-4 col-sm-4  portfolio-item  graphics mix"><img src="images/events/600/code_fiesta/6_klutzy_code.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.7s">
      <div class="portfolio-details portfolio-details_2_column">
        <h2 style="font-family: 'Poiret One', cursive;">KLUTZY KODE</h2>
        <!--<p>The event consists of a set of questions along with their code snippets. Racing against time, get your code to work the fastes </br>Duration : 1 hour</p>
       <p><h3> Participants : </h3></p> -->
      </div>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-4 col-sm-4 portfolio-item graphics mix"><img src="images/events/600/code_fiesta/9_witty_coder.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.7s">
      <div class="portfolio-details portfolio-details_2_column">
        <h2 style="font-family: 'Poiret One', cursive;">WITTY CODER</h2>
        <!--<p>The participant here is given a set of .exe or .jar files. Based on the visuals in the respective files the candidate needs to develop codes which on execution run like the ones in the files. Language: C/C++/JAVA. </br> Duration: 1 hour</p>
        <p><h3> Participants : </h3></p>--> 
      </div>
    </div>
    <!-- /.col-md-4 portfolio-item mix --> 
  </div>
  <!-- /#grid.row -->
  <div class="clearfix"></div>
  <div class="hs_margin_bottom"></div>
</div>
<div class="clearfix"></div>
<!--footer start-->
<div class="hs_footer">
  <div class="container hs_footer_content">
    <div class="hs_footer_copyright index_footer_copyright">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 hs_footer_logo_div">
          <div class="hs_footer_logo" style="font-family: 'Poiret One', cursive;">Encarta<sup class="hs_footer_logo_num" >15</sup></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 hs_footer_copyright_div">
          <p><span>2015</span> C <span>Encarta, MBM</span> All Right Reserved. <span>Developed By: <a href="javascript:void(0)" style="font-size:1.2em;">Team Encarta </a> </span> </p>          
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 hs_footer_social_div">
          <div><a href="https://www.facebook.com/Encarta-2k15-1907469076144784/"><img src="images/flat-icon/facebook.png" alt=""  width="20" height="20"/></a></div>
          <div><a href="googleplus"><img src="images/flat-icon/google_plus.png" alt=""   width="20" height="20"/></a></div>
          <div class="hs_google_plus"><a href="http://www.mbm.ac.in"><img src="images/mbmlogo.png" alt="" width="20"/></a></div>

        </div>
      </div>
    </div>
  </div>
</div>
<!--footer end--> 

<!--main js start--> 
<script src="js/jquery.min.js" type="text/javascript"></script> 
<!-- <script type="text/javascript" src="css/bxslider/jquery.bxslider.js"></script>  -->
<!-- <script type="text/javascript" src="css/bxslider/jquery.bxslider.min.js"></script>  -->
<!-- <script type="text/javascript" src="css/owl-carousel/owl.carousel.js"></script>  -->
<script src="js/jquery.mixitup.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/jquery.fancybox.js"></script> 
<script type="text/javascript" src="js/jquery.hoverdir.js"></script> 
<script type="text/javascript">
		$(document).ready(function() {
		$('.fancybox').fancybox();
		});
		
	$(function() {
			
				$('.portfolio-item').each( function() { $(this).hoverdir(); } );

			});	
		
		// var owl = $(".featured_post");
		//   owl.owlCarousel({
		// 	  itemsCustom : [
		// 		[0, 1],
		// 		[450, 2],
		// 		[600, 2],
		// 		[700, 3],
		// 		[1000, 3],
		// 		[1200, 4],
		// 		[1400, 4],
		// 		[1600, 4]
		// 	  ],
		// 	  navigation : true
		//   });
</script> 
<script type="text/javascript" src="js/animate.js"></script> 
<script type="text/javascript" src="js/custom.js"></script> 
<!--main js end-->
  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
  <!-- Gallery -->
  <script type="text/javascript" src="js/gallery/scattered/js/modernizr.min.js"></script>
  <script type="text/javascript" src="js/gallery/scattered/js/classie.js"></script>


<!-- Go To Top -->
<a title="Go To Top" href="1" class="crunchify-top">↑</a>
<style type="text/css">
  .crunchify-top:hover {
  color: #fff !important;
  text-decoration: none;
  background-color: #e59400;
}
 
.crunchify-top {
  display: none;
  position: fixed;
  bottom: 1rem;
  right: 1rem;
  width: 5.2rem;
  height: 5.2rem;
  line-height: 4.2rem;
  font-size: 3.5rem;
  color: #fff;
  background-color: #008363;
  text-decoration: none;
  border-radius: 3.2rem;
  text-align: center;
  cursor: pointer;
}
</style>

<!-- Page overlay -->
<div id="loader2" style="z-index:2000;" class="pageload-overlay" data-opening="M20,15 50,30 50,30 30,30 Z;M0,0 80,0 50,30 20,45 Z;M0,0 80,0 60,45 0,60 Z;M0,0 80,0 80,60 0,60 Z" data-closing="M0,0 80,0 60,45 0,60 Z;M0,0 80,0 50,30 20,45 Z;M20,15 50,30 50,30 30,30 Z;M30,30 50,30 50,30 30,30 Z">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
          <path d="M30,30 50,30 50,30 30,30 Z"/>
        </svg>
</div><!-- /pageload-overlay -->

<link rel="stylesheet" type="text/css" href="css/overlay/component.css" />
<script src="js/overlay/snap.svg-min.js"></script>
<script src="js/overlay/svgLoader.js"></script>
<script>
      (function() {
        // var pageWrap = document.getElementById( 'pagewrap' ),
        //   pages = [].slice.call( pageWrap.querySelectorAll( 'div' ) ),
        //   currentPage = 0,
          // triggerLoading = [].slice.call( pageWrap.querySelectorAll( 'a' ) ),
          var triggerLoading = document.getElementsByTagName('a'),
          triggerLoading = Array.prototype.slice.call(triggerLoading),
          loader = new SVGLoader( document.getElementById( 'loader2' ), { speedIn : 100 } );

        function init() {
          triggerLoading.forEach( function( trigger ) {
            var link = trigger.getAttribute("href");
            if(link != "1" && link != "javascript:void(0)")
            {
            trigger.addEventListener( 'click', function( ev ) {
              ev.preventDefault();
              loader.show();
              // after some time hide loader
              setTimeout( function() {
                loader.hide();

                classie.removeClass( pages[ currentPage ], 'show' );
                // update..
                currentPage = currentPage ? 0 : 1;
                classie.addClass( pages[ currentPage ], 'show' );

              }, 2000 );
              setTimeout(function loadNextPage(){
                  window.location.href = link;
                  
              },1000);
              
            } );
          }
          } );  
        }
      
        init();
      })();
    </script>


</body>
</html>