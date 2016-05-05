<?php
/**
 * Template Name: Index
 *
 * @package WordPress
 * @subpackage MiljobronTheme
 * @since MiljobronTheme 1.0
 */
?>


<!doctype html>



<html ng-app="app">
    <head>
        
        
        <base href="<?php $url_info = parse_url( site_url() ); echo trailingslashit( $url_info['path'] ); ?>">
        <title> hello miljo </title> 
        
        <!-----------  behöver flyttas till functions.php -------------------------------------->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-resource.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-route.js"> </script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-sanitize.js"> </script>
        
    
<?php wp_head()?> <!-- fixar alla scripts och links, hooks/refererar till functions.php -->
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<meta charset="utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 

</head>

<body>

<?php get_header() ?>
  
<div id="container" ng-view>
</div> <!-- dont remove!! dependent on AngularJS --->

<?php get_sidebar() ?>
<?php get_footer() ?>

 
</body>

</html>      <!-- end tag ----->





