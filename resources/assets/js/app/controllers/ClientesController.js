'use strict';
var ClientesController = function($scope, high) {
    $scope.pageClass = 'page-clientes';
    $scope.testVar = 'Esta es el area de clientes Controller!';

    $scope.chartConfig = {
        options: {
            chart: {
                type: 'bar'
            }
        },
        series: [{
            data: [10, 15, 12, 8, 7]
        }],
        title: {
            text: 'Hello'
        }
    };
};
module.exports = ClientesController;