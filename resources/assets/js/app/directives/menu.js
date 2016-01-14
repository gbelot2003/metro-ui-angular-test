'use strict';

var menu = function(){
  return {
      restrict: 'E',
      templateUrl: 'js/app/views/directives/menu.html',
      controller: function($scope, $location, $route){
          $scope.activePath = null;
          $scope.$on('$routeChangeSuccess', function(){
              $scope.activePath = $location.path();
          });
      },
      controllerAs: menu
  };
};

module.exports = menu;