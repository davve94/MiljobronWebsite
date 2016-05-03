<!doctype html >

<html>
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
 
  <!------------------------ header --------------------------------------------->
  
   <div id="head">
       
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
   
      <!-- Indicators NOT CENTERED
    <ol class="carousel-indicators"  >
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
        -->
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="wp-content/themes/MiljobronTheme/Images/bg.jpg" alt="Miljöbron" width="auto" height="100%">
        <div class="carousel-caption">
        <h3>Mijöbron</h3>
        <p>Praise the lord</p>
      </div>
      </div>

      <div class="item">
        <img src="wp-content/themes/MiljobronTheme/Images/bg2.jpg" alt="Miljöbron" width="auto" height="100%">
        <div class="carousel-caption">
        <h3>Mijöbron</h3>
        <p>Praise the lord</p>
      </div>
      </div>
    
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
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
          
       <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Sök" >
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>
        </button>
        </form>
             <!-- <input type="button" ng-click="Buttonclick()"/>
             <span ng-bind="Message"></span>-->
               
       
     
   </div>   <!-- menubar end tag -->
   <!-- </div>  not nice--> 

<!--<div id="container"> -->
    
           
        
        
     
   

