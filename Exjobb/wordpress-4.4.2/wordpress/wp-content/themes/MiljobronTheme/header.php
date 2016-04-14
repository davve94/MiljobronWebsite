<!doctype html >

<html>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 <title>Miljöbron</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" /> 
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script type ="text/javascript" src="functions.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<body>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> <!-- enables the awesome fade in effec -->
    <head>
 
        <meta charset="utf-8"/>
        <title><?php bloginfo('title')?></title>
        <link rel ="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
        <?php wp_head()?> 
     </head>
     <div id = "structure" > 
   <div id="head">
        <!--<h1><a href="<?php home_url('/')?>"<?php bloginfo('name')?></a> </h1> -->
        <ul>
    <li><a href="default.asp">Hem</a></li>
    <li><a href="news.asp">X-Race</a></li>
    <li><a href="contact.asp">Student</a></li>
    <li><a href="about.asp">Företag</a></li>
    <li><a href="about.asp">Partner</a></li>
    <li><a href="about.asp">Resultat</a></li>
    <li><a href="about.asp">Om</a></li>
    <li><a href="about.asp">Kontakt</a></li>
</ul>
       <div class="topright">
           <img src="logo.jpg" width="200px" height="100px" alt=""/>
       </div>
       
       <div
    class="test"
    data-slides='[
        "img1.jpg",
        "img3.jpg"
    ]'
    
    > … 
       
       </div> <!-- /.primary -->
       
       
       
       
<script>
    (function($) {

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
</script>
       
    </div>
     <div id="container"> 
     
   

