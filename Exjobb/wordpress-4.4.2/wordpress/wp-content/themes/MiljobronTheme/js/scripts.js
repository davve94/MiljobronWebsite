/*
angular.module('LinkModule', ['ngSanitize'])
.filter('addTargetBlank', function(){
  return function(x) {
    var tree = angular.element('<div>'+x+'</div>');//defensively wrap in a div to avoid 'invalid html' exception
    tree.find('a').attr('target', '_blank'); //manipulate the parse tree
    return angular.element('<div>').append(tree).html(); //trick to have a string representation
  };
})

.controller('LinkCtrl', function($scope){
  $scope.myHtml = 'test html content 1 <a href="#">click here</a>, test html content 2 <a href="#">click here</a>, test html content 3 <a href="#">click here</a>';
});
*/
