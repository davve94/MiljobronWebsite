/**************************************************************************/

/*             "   Alla javascript funktioner läggs här   "               */

/**************************************************************************/
/**<script src="js/myfile.js?t=<?=time()?>" type="text/javascript">
 *  need later for timestamp, updating javascript
 *   
 * */
function getTimeStamp() {
      var d = new Date();
      var n = d.getTime();
      alert(n);
}
/*
 * will change the position of the navigation menu (= #menubar) 
 * from fixed to relative when y is greater than or equal to 500, 
 * which basically means scrolling down to a certain point.
 */
/*
 * 
 *to reload the current page. It will ignore any cached items and retrieve new copies of the 
 *page, css, images, JavaScript, etc from the server. 
 *This doesn't clear the whole cache, but has the effect of clearing the cache for the page you are on.
 */
function clearCache() {
    window.location.reload(true);
} 
function fixedMenu() {
$(document).scroll(function() {
    var y = $(document).scrollTop(), //get page y value 
        menu = $("#menubar");
    if(y >= 500)  {
        menu.css("position", "relative");
      } else {
          menu.css({position: "fixed", "top" : "0", "left" : "0"});
      }
});
}
function slider() {
!function(t){"use strict";var a=t("[data-slides]"),ni=0,s=a.data("slides"),e=s.length,n=function(){if(ni>=a.length){ni=0}else{ni++};a.css("background-image",'url("'+s[ni]+'")').show(0,function(){setTimeout(n,5e3)})};n()}(jQuery);

}
/*function header( $name = null ) {
	/**
	 * Fires before the header template file is loaded.
	 *
	 * The hook allows a specific header template file to be used in place of the
	 * default header template file. If your file is called header-new.php,
	 * you would specify the filename in the hook as get_header( 'new' ).
	 *
	 * @since 2.1.0
	 * @since 2.8.0 $name parameter added.
	 *
	 * @param string $name Name of the specific header file to use.
         * 
	 */
        
/*	do_action( 'get_header', $name );

	$templates = array();
	$name = (string) $name;
	if ( '' !== $name ) {
		$templates[] = "header-{$name}.php";
	}

	$templates[] = 'header.php';

	locate_template( $templates, true );
}

/************************************************************************/

/* Functions for images slideshow............
 * 
var slideIndex = 1; 
showDivs(slideIndex);    // how to call showDivs
*/ 
/*function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
/*****************************************************************/

/******************************************************************************/

//SLIDESHOW FUNCTIONS


var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1;}    
  if (n < 1) {slideIndex = x.length;} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1;}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000);    
    }
/******************************************************************************/
/*(function($) {

    'use strict';

    var $slides = $('[data-slides]');
    var images = $slides.data('slides');
    var count = images.length;
    var slideshow = function() {
        $slides
            .css('background-image', 'url("' + images[Math.floor(Math.random() * count)] + '")')
            .show(0, function() {
                setTimeout(slideshow, 5000);
            });
    };

    slideshow();

}(jQuery));

/*********************************************************************/

var bgimages=new Array();
bgimages[0]="wp-content/themes/MiljobronTheme/Images/img1.jpg";
bgimages[1]="wp-content/themes/MiljobronTheme/Images/img2.jpg";
bgimages[2]="wp-content/themes/MiljobronTheme/Images/img3.jpg";

//preload images
var pathToImg=new Array();
for (i=0;i<bgimages.length;i++){
pathToImg[i]=new Image();
pathToImg[i].src=bgimages[i];
}

var inc=-1;

function bgSlide(){
if (inc<bgimages.length-1)
inc++;
else
inc=0;
document.body.background=pathToImg[inc].src;
}

if (document.all||document.getElementById)
window.onload=new Function('setInterval("bgSlide()",3000)');