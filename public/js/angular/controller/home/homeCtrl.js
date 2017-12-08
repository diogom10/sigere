
angular.module("sigere_home", ["chart.js"]).controller("homeCtrl", ['$scope', '$http', 'homeService', function ($scope, $http, homeService) {

        $scope.session = angular.element('#session').val();
        var base_url = angular.element('#url').val();
        var user_id = angular.element('#user_id').val();
        $scope.dia = ["Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sabado", "Domingo"];
        $scope.mes = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
        var teste = ["1","2","2"];
        $scope.array = teste;
        $scope.labels = [];
        $scope.series = [];
        $scope.data = [];
        $scope.logoutOff = function () {

            homeService.logout(1, base_url + "/logout").then(function (response) {
                if (response.data.success) {
                    window.location.assign(base_url + '/login');
                } else {

                }
            });
        };
        
        $(document).ready(function () {
            $("#MyModal").modal();
        });
          
            $scope.labels = $scope.dia;
            $scope.series = ['R$'];
            $scope.data = [
                [100, 0, 60, 70, 80, 10, 400]
            ];
            $scope.onClick = function (points, evt) {
                console.log(points, evt);
            };
            $scope.datasetOverride = [{yAxisID: '1'}];
            $scope.options = {
                scales: {
                    yAxes: [
                        {
                            id: '1',
                            type: 'linear',
                            display: true,
                            position: 'left'
                        }
                    ]
                }
            };

        
        
    }]);