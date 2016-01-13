'use strict';
module.exports = function($scope, $location, $http, $filter, $route) {
    $scope.loading = false;
    $scope.route = $route;
    $scope.title = "HomeController";
};