'use strict';

require('angular');

/** libraries injected require **/
var routes = require('angular-route');
var animate = require('angular-animate');
var uibs = require('angular-ui-bootstrap');
var high = require('highcharts-ng');

/** Main instance **/
var app = angular.module('adminApp', [routes, animate, uibs, high]);

/** Controllers **/
var WelcomeCtrl = require('./controllers/WelcomeCtrl');
var menuController = require('./controllers/menuController');
var ClientesController = require('./controllers/ClientesController');

/** Directives **/
var menu = require('./directives/menu');
app.directive('menuNav', menu);

/** Config **/
app.config(function($routeProvider, $locationProvider){

    $routeProvider
        .when('/', {
            controller: 'WelcomeCtrl',
            templateUrl: './js/app/views/index.html'
        })
        .when('/reportes', {
            controller: 'ClientesController',
            templateUrl: './js/app/views/clientes/index.html'
        })
        .otherwise({redirectTo: '/'});

    $locationProvider.html5Mode(false);

});

app.config(['highchartsNGProvider', function (highchartsNGProvider) {
    highchartsNGProvider.lazyLoad();// will load hightcharts (and standalone framework if jquery is not present) from code.hightcharts.com

    highchartsNGProvider.lazyLoad([highchartsNGProvider.HIGHCHART/HIGHSTOCK, "maps/modules/map.js", "mapdata/custom/world.js"]);// you may add any additional modules and they will be loaded in the same sequence

    highchartsNGProvider.basePath("/js/"); // change base path for scripts, default is http(s)://code.highcharts.com/

}]);

/** Instances **/
app.controller('menuController', ['$scope', menuController]);
app.controller('WelcomeCtrl', ['$scope', WelcomeCtrl]);
app.controller('ClientesController', ['$scope', ClientesController]);