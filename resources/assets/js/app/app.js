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
var menuController = require('./controllers/menuController');
var WelcomeCtrl = require('./controllers/WelcomeCtrl');
var Reportes = require('./controllers/ReportesController');

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
            controller: 'ReportesController',
            templateUrl: './js/app/views/reportes/index.html'
        })
        .otherwise({redirectTo: '/'});

    $locationProvider.html5Mode(false);

});


/** Instances **/
app.controller('menuController', ['$scope', menuController]);
app.controller('WelcomeCtrl', ['$scope', WelcomeCtrl]);
app.controller('ReportesController', ['$scope', '$http', Reportes]);