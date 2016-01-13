'use strict';

require('angular');
require('angular-route');
require('angular-animate');
var uibs = require('angular-ui-bootstrap');

/** Main instance **/
var app = angular.module('adminApp', ['ngRoute']);

/** Directives **/

/** Controllers **/
var WelcomeCtrl = require('./controllers/WelcomeCtrl');
var menuController = require('./controllers/menuController');

/** Config **/
app.config(function($routeProvider, $locationProvider){

    $routeProvider
        .when('/', {
            controller: 'WelcomeCtrl',
            templateUrl: './js/app/views/index.html'
        });

    $locationProvider.html5Mode(false);

});

/** Instances **/
app.controller('menuController', ['$scope', menuController]);
app.controller('WelcomeCtrl', ['$scope', WelcomeCtrl]);