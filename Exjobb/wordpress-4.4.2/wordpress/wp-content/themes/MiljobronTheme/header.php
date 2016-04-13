<!doctype html >

<html>
    
    
    <head>
       
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <meta charset="utf-8"/>
        <title><?php bloginfo('title')?></title>
        <link rel ="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
       <?php wp_head()?>
     </head>
   <header>
        <h1><a href="<?php home_url('/')?>"<?php bloginfo('name')?></a> </h1>
    </header>
     
     
     <div id ="container">
         
         
         <img class="mySlides" src="img1.jpg" class="img-responsive img-circle" width="500px" height="400px"/>
        <img class="mySlides" src="img1.jpg"  width="500px" height="400px"/>
         
         
        
        
        <a class="w3-btn-floating" onclick="plusDivs(-1)">&#10094;</a>
        <a class="w3-btn-floating" onclick="plusDivs(+1)">&#10095;</a>
        
     </div>
