 'use strict';

angular.module('app', ['ngRoute','ngSanitize'])
    .config(config);
    
config.$inject = ['$routeProvider','$locationProvider'];
function config($routeProvider, $locationProvider) {

    $locationProvider.html5Mode(true);
    $routeProvider
        .when('/', {
            templateUrl: 'wp-content/themes/MiljobronTheme/Partials/main.html',
            controller: 'Main'
            
        })
        .when('/:slug', {
            templateUrl: 'wp-content/themes/MiljobronTheme/Partials/page.html',
            controller: 'Content'
          
        })
         .when('/:slug/uppdrag', {
            templateUrl: 'wp-content/themes/MiljobronTheme/Partials/page.html',
            controller: 'Uppdrag'
            
        });
            
         //.otherwise({ redirectTo: '/' }); */
        
    };
angular.module('app').controller('Main', function($scope, $http,  $routeParams) {
        //console.log("============ 1 ===========");
        //$http.defaults.transformResponse = [];
	 $http.get('api/get_posts').success(function(res){
       
        $scope.postss = res.posts;
        console.log("== " + $scope.postss);
        console.log(arguments);
         
        
        //console.log("==  3  = " + res[0]);
});

});
angular.module('app').controller('Content',  function($scope, $http, $routeParams){ 
//$scope.loadData = function(){
        console.log("=== " + $routeParams.slug);
	$http.get('api/get_page/?slug=' + $routeParams.slug).success(function(res){
		$scope.pagess = res.page;
            console.log("=== " + $scope.page);
            console.log(arguments);
            console.log("========================stop============================");
            
	});
    //};
        //$scope.loadData();
});
angular.module('app').controller('Uppdrag',  function($scope, $http, $routeParams){ 

        console.log("=== " + $routeParams.slug);
	$http.get('api/get_page/?slug=x-race/uppdrag').success(function(res){
		$scope.pagess = res.page;
            console.log("=== " + $scope.page);
            console.log(arguments);
            console.log("========================stop============================");
            
	});
    
});
angular.module('app').filter('addTargetBlank', function(){
   return function(x) {
    var tree = angular.element('<div>'+x+'</div>');//defensively wrap in a div to avoid 'invalid html' exception
    tree.find('a').attr('target', '_blank'); //manipulate the parse tree
    if(x) return angular.element('<div>').append(tree).html(); //trick to have a string representation
  };
});
/*
.controller('HomeCtrl', function($scope){ /* does nothing 
  $scope.myHtml = 'test html content 1 <a href="#">click here</a>, test html content 2 <a href="#">click here</a>, test html content 3 <a href="#">click here</a>';
});
*/


