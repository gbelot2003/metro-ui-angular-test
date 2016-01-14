'use strict';
var WelcomeCtrl = function($scope) {
    $scope.pageClass = 'page-home';
    $scope.testVar = 'We are up and running from a required module!';
};

module.exports = WelcomeCtrl;