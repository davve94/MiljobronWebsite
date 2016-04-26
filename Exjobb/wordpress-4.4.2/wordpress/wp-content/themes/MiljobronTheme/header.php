<!doctype html >

<html ng-app="headapp">
<head>
<title><?php bloginfo('title')?></title>
<?php wp_head()?> <!-- fixar alla scripts och links, hooks/refererar till functions.php -->
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<meta charset="utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
</head>
<!------------------------------------------------------------------------------------>
<body>
<div id = "structure" > 
    
   <div id="head">
       
      <div id="menubar" > 
      
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
          <div ng-controller="MyController">
       <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Sök" >
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>
        </button>
        </form>
             <!-- <input type="button" ng-click="Buttonclick()"/>
             <span ng-bind="Message"></span>-->
               
          </div>
          <!--
         <div  class="header_slider" data-slides='[
               "<?php// echo get_bloginfo('template_directory');?>/Images/img1.jpg", 
               "<?php //echo get_bloginfo('template_directory');?>/Images/img2.jpg "
               ]'>
      </div> 
          -->
     
   </div>
    
          <div class="slideshow">
              <center>
<img class="mySlides " src="wp-content/themes/MiljobronTheme/Images/bg.jpg" style="height:100%; width:auto;  " >
<img class="mySlides" src="wp-content/themes/MiljobronTheme/Images/bg2.jpg" style="height:100%; width:auto;">


<a class="w3-btn-floating" style="position:absolute;top:20%;left:0" onclick="plusDivs(-1)">❮</a>
<a class="w3-btn-floating" style="position:absolute;top:20%;right:0" onclick="plusDivs(1)">❯</a>
             </center>
</div>
       
       
       
        </div>
        
  <script>
        var slideIndex = 1;
showDivs(slideIndex);



       
function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
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
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000);    
}
</script>

    <div id="container"> <p> hello </p>
           
        
        
     
   

