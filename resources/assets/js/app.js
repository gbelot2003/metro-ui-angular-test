'use strict';

require('angular');
require('angular-ui-router');
require('angular-animate');

var app = angular.module('adminApp', ['ui.router']);
app.config(function($stateProvider, $urlRouterProvider){

    $urlRouterProvider.otherwise("/state1");

    $routeProvider
        .when('/', {
            controller: 'homeController',
            templateUrl: 'app/view/index.js'
        });

    $locationProvider.html5Mode(false);
});

app.controller('homeController', require('./app/controllers/homeController.js'));