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

<!------------------------------------------------------------------------------>
<!--------------------------- AngularJS ---------------------------------------->
<!------------------------------------------------------------------------------>
      
 <script>           
 'use strict';

angular.module('app', ['ngRoute','ngSanitize'])
    .config(config);
    
config.$inject = ['$routeProvider','$locationProvider'];
function config($routeProvider, $locationProvider) {
    $locationProvider.html5Mode(true);
    $routeProvider
        .when('/', {
            controller: 'Main',
            templateUrl: '<?php echo get_template_directory_uri();?>/Partials/main.html'
        })
        .when('/:slug', {
            controller: 'Slug',
            templateUrl: '<?php echo get_template_directory_uri();?>/Partials/demo.html'
        });
    };
angular.module('app').controller('Main', function($scope, $http) {
        //console.log("============ 1 ===========");
        //$http.defaults.transformResponse = [];
	 $http.get('api/get_posts').success(function(res){
        // console.log("============= 3 ==============");
        $scope.postss = res.posts;
        //console.log("==  3  = " + res[0]);
        
        
});

});
angular.module('app').controller('Slug', function($scope, $http) {
	$http.get('api/get_posts').success(function(res){
            $scope.postss = post.res;
            
        });
      
});
</script>
<!------------------------------------------------------------------------------>
<!------------------------------ ends ------------------------------------------>
<!------------------------------------------------------------------------------>
</head>

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
 <!-------------------------------------------------------------------------------------->
 <!------------------------------- container -------------------------------------------->
 
        <div id="container" ng-view> </div> <!-- dont remove!! dependent on AngularJS --->
        
 <!-------------------------------------------------------------------------------------->       
 <!-------------------------------------- sidebar --------------------------------------->        
<div id="sidebar">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <div >
        <p>
                    Dagens Nyheter! :D 
        </p> 
        <img src="<?php echo get_template_directory_uri();?>/Images/AngularJS.jpg" height="150" width="150" ></img>
        <div class="instagram" >
         
        <!-- <script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/0fb9ebf3e81053e48d9a494db8a60ac8.html" id="lightwidget_0fb9ebf3e8" name="lightwidget_0fb9ebf3e8"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%; height: 40%; border: 0; overflow: hidden;"></iframe> -->
        
        </div>
        
    
    </div>
   

</div>  <!---  sidebar end tag --->   

<!---------------------------------- footer ----------------------------------------------->
<!----------------------------------------------------------------------------------------->

 <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<footer class="footer-distributed">

	<div class="footer-left">
  
             <div class="footer-left"> Fyll i för nyhetsbrev! </p>
                 <input type="text" class="form-control" placeholder="E-mail">
                    <p></p>
                         <input type="text" class="form-control" placeholder="Fullt namn">
                         <p></p>
                            <button type="button" class="btn btn-default">Skicka</button>
                                </div>
				
                            <div id="copyright">   
                            <p>    <?=date('Y')?>   Copyright Miljöbron   </p>                   
                            </div>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Anders Carlssons Gata 7</span>417 55, Göteborg</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;031-202 789&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
				</div>

				<div>
					<i id="email" class="fa fa-envelope"></i>
					<p><a href="mailto:info@miljobron.se">info@miljobron.se &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Om oss</span>
					Miljöbron är en ideell organisation som genom stöd från aktörer inom offentlig och privat sektor, samt högskola och universitet, kan förmedla den här hjälpen kostnadsfritt till företag och studenter. Läs mer om våra partner under fliken Partner i menyn.
				</p>
                                

				<div class="footer-icons">
<a class="btn btn-social-icon btn-twitter" href="https://twitter.com//miljobron" target="_blank">
    <span class="fa fa-twitter"></span>
  </a>
  <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/miljobron/" target="_blank">
    <span class="fa fa-instagram"></span>
  </a>
  <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com//miljobron" target="_blank">
    <span class="fa fa-facebook"></span>
  </a>

				</div>

			</div>
<!------------------------------------------------------------------------------------------>
<!------------------- Kalla på Javascript funktioner här ----------------------------------->
<!------------------------------------------------------------------------------------------>
      <script>
          var slideIndex = 1;
          showDivs(slideIndex);     // image slider- changes the images in the header
          var myIndex = 0;
          carousel();
      </script>
      <script>
          fixedMenu();   // menu changes position when scroll reaches certain point
      </script>
</footer>

</div>      <!--- head end tag ------> 

</div>      <!----  structure end tag ----->

<!-- add wp_footer() here! when nav menu works!, before /body -->

 
</body>

</html>      <!-- end tag ----->





