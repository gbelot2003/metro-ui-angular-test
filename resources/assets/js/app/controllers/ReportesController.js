'use strict';
var ReportesController = function($scope, $http, high) {
    $scope.pageClass = 'page-clientes';
    $scope.testVar = 'Esta es el area de clientes Controller!';

    $http.get('api/reportes/tipo-sujeto-agredido').success(function(data){
       $scope.data = data;

        var arr = [];
        data.forEach(function(e){
            arr.push(e.y);
        });
        console.log(arr);
        $scope.chartConfig = {
            options: {
                chart: {
                    type: 'bar'
                }
            },
            title: {
                text: 'Tipo Sujeto Agredido'
            },
            xAxis:{
                categories:['Periodista', 'Comunicador Social', 'Camarografo', 'Vocero de grupo campesino']
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Sujeto Agredido', data: arr
            }]
        };
    });
};

module.exports = ReportesController;