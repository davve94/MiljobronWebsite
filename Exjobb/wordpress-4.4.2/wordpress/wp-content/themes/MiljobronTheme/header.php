<!doctype html >

<html>
<head>
<!-- här lägger man till scripts och links! Obs! ordning spelar roll! -->
<title><?php bloginfo('title')?></title>

<link href="wp-content/themes/MiljobronTheme/Resources/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css" > <!-- automatisk responsivitet för olika platformar -->
<link rel ="stylesheet" href="<?php bloginfo('stylesheet_url')?>" /> 
<?php wp_head()?> 
<meta charset="utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 

<script src="wp-content/themes/MiljobronTheme/Resources/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="wp-content/themes/MiljobronTheme/Resources/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script type ="text/javascript" src="wp-content/themes/MiljobronTheme/functions.js"></script> <!-- samma som ovan kanske ?? -->
</head>
<!------------------------------------------------------------------------------------>
<body>
<div id = "structure" > 
    
   <div id="head">
       <nav id="menubar" role="navigation" >
       <ul class="nav nav-pills">
           <li role="presentation"><a href="index.php">Hem</a></li>
        <li role="presentation"><a href="X_Race.php">X-Race</a></li>
        <li role="presentation"><a href="Student.php">Student</a></li>
        <li role="presentation"><a href="#">Företag</a></li>
        <li role="presentation"><a href="#">Partner</a></li>
        <li role="presentation"><a href="#">Resultat</a></li>
        <li role="presentation"><a href="#">Om</a></li>
        <li role="presentation"><a href="#">Kontakt</a></li>
         <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Sök">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>
        </button>
        </form>
        </ul>
       </nav>
       <script>
           fixedMenu();
       </script>
       
       <div id="topright">
          <img src="wp-content/themes/MiljobronTheme/Images/logo.jpg" width="200px" height="100px" alt=""/>
       
       </div>
       
       
        </div>
   
        <div id="container"> 
            <script>
                
                getTimeStamp(); // test-- returns timestamp with dialog
            </script>
      
        
        
     
   

