'use strict';

require('angular');
require('angular-ui-router');
require('angular-animate');

var app = angular.module('adminApp', ['ngRoute']);
app.controller('clientesCtlr', require('./app/controllers/clientesCtrl.js'));