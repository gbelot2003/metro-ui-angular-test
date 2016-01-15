'use strict';

require('angular');

/** libraries injected require **/
var routes = require('angular-route');
var animate = require('angular-animate');
var uibs = require('angular-ui-bootstrap');

/** Main instance **/
var app = angular.module('adminApp', [routes, animate, uibs]);

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

/** Instances **/
app.controller('menuController', ['$scope', menuController]);
app.controller('WelcomeCtrl', ['$scope', WelcomeCtrl]);
app.controller('ClientesController', ['$scope', ClientesController]);