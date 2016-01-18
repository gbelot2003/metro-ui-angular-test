'use strict';
var ReportesController = function($scope, high) {
    $scope.pageClass = 'page-clientes';
    $scope.testVar = 'Esta es el area de clientes Controller!';

    $scope.chartConfig = {
        options: {
            chart: {
                type: 'bar'
            }
        },
        series: [{
            name: 'Periodistas',
            data: [24, 11, 1, 9]
        }, {
            name: 'Comunicador Social',
            data: [14, 1, 0, 2]
        }],

        title: {
            text: 'Tipo Sujeto Agredido'
        }
    };
};
module.exports = ReportesController;