
'use strict';

angular.module('app').controller('Main', function($scope, $http) {
        console.log("============ 1 ===========");
        //$http.defaults.transformResponse = [];
	 $http.get('api/get_posts').success(function(res){
         console.log("============= 3 ==============");
        $scope.postss = res.posts;
        console.log("==  3  = " + res[0]);
        
        
});

});




