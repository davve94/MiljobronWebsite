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
         .when('/:slug/', {
            templateUrl: 'wp-content/themes/MiljobronTheme/Partials/page.html',
            controller: 'Content'
            
        });
        // .otherwise({ redirectTo: '/' });
        
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
$scope.loadData = function(){
        console.log("=== " + $routeParams.slug);
	$http.get('api/get_page/?slug=' + $routeParams.slug).success(function(res){
		$scope.pagess = res.page;
            console.log("=== " + $scope.page);
            console.log(arguments);
            console.log("========================stop============================");
            
	});
    };
        $scope.loadData();
});
/*angular.module('app').controller('myCtrl', function($scope, $window) {
    
    

});
angular.module('app').directive('href', function() {
  return {
    compile: function(element) {
      element.attr('target', '_blank');
    }
  };
}); */
