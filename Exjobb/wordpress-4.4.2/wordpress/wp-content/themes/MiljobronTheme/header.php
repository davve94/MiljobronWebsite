<!doctype html >

<html>
<head>
<title><?php bloginfo('title')?></title>
<?php wp_head()?> <!-- fixar alla scripts och links, hooks/refererar till functions.php -->
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
       <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Sök" >
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>
        </button>
        </form>
       
   </div>

          <div  class="header_slider" data-slides='[
        "wp-content/themes/MiljobronTheme/Images/img1.jpg",         
        "wp-content/themes/MiljobronTheme/Images/img2.jpg"
        
         ]'
    
        ></div> 
        <script>
                slider();
                getTimeStamp(); // test-- returns timestamp with dialog
        </script> 
       <script>
          fixedMenu();
       </script> 
       
        </div>
   
        <div id="container"> 
            <!--<script>
                slider();
                getTimeStamp(); // test-- returns timestamp with dialog
            </script> -->
      
        
        
     
   

