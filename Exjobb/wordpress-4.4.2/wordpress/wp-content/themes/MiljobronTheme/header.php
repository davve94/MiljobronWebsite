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
     
   </div>   <!-- menubar slut tag -->
    
          <div class="slideshow">
              <center>
<img class="mySlides " src="<?php echo get_bloginfo('template_directory');?>/Images/bg.jpg" style="height:100%;width:auto;"/>
<img class="mySlides" src="<?php echo get_bloginfo('template_directory');?>/Images/bg2.jpg" style="height:100%;width:auto;"/>
<img class="mySlides" src="<?php echo get_bloginfo('template_directory');?>/Images/img1.jpg" style="height:100%;width:auto;"/>
<img class="mySlides" src="<?php echo get_bloginfo('template_directory');?>/Images/img2.jpg" style="height:100%;width:auto;"/>


<a class="w3-btn-floating" style="position:absolute;top:20%;left:0" onclick="plusDivs(-1)">❮</a>
<a class="w3-btn-floating" style="position:absolute;top:20%;right:0" onclick="plusDivs(1)">❯</a> 
             </center>
</div>
       
 </div>  <!-- header slut tag --> 


    <div id="container"> <p> hello </p>
           
        
        
     
   

