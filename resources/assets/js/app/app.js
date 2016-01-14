'use strict';

require('angular');
require('angular-route');
require('angular-animate');

/** libraries require **/
var uibs = require('angular-ui-bootstrap');
var menu = require('./directives/menu');

/** Main instance **/
var app = angular.module('adminApp', ['ngRoute','ngAnimate', uibs]);

/** Controllers **/
var WelcomeCtrl = require('./controllers/WelcomeCtrl');
var menuController = require('./controllers/menuController');
var ClientesController = require('./controllers/ClientesController');

/** Directives **/
app.directive('menuNav', menu);


/** Config **/
app.config(function($routeProvider, $locationProvider){

    $routeProvider
        .when('/', {
            controller: 'WelcomeCtrl',
            templateUrl: './js/app/views/index.html'
        })
        .when('/clientes', {
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
