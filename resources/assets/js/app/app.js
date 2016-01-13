'use strict';

require('angular');
require('angular-route');
require('angular-animate');

var app = angular.module('adminApp', ['ngRoute']);

app.config(function($routeProvider, $locationProvider){

    $routeProvider
        .when('/', {
            controller: 'homeController',
            templateUrl: './views/index.html'
        });

    $locationProvider.html5Mode(false);

})

.controller('homeController', require('./controllers'));