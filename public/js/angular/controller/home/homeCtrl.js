
angular.module("sigere_home", ["chart.js"]).controller("homeCtrl", ['$scope', '$http', 'homeService', function ($scope, $http, homeService) {

    $scope.session = angular.element('#session').val();
    var base_url = angular.element('#url').val();
    var user_id = angular.element('#user_id').val();
    $scope.energy = '';
    $scope.eletronics = '';
    $scope.isEnergia = false;
    $scope.labels = [];
    $scope.series = [];
    $scope.series = [];
    $scope.data = [] ;
    $scope.array = [];
    $scope.kw = [];
    $scope.isKw = false;

    var times = [];
    var datas = [];
    var datas2 = [];
    var series = [];
    var series2 = [];
    $scope.energia = function() {
        homeService.getEnergia(user_id, base_url+"/getEnergia").then(function (response) {
            if (response.data.success) {
                $scope.energy = response.data.energia;
                console.log($scope.energy);
            } else {

            }
        });
    };

    $scope.energia();

    $scope.addKw = function(index, energia, isKw){

        if(isKw) {
            energia.forEach(function (data) {
                $scope.kw.push(data.energia);

            });

            $scope.data[index].push( $scope.kw);
            $scope.series[index].push(energia[0].uniMedidaK);
            $scope.kw = [];
        }else{
            $scope.data[index].splice(1, 1);
            $scope.series[index].splice(1, 1);
            $scope.kw = [];
        }
    };


    $scope.graficos = function(indexFather ,indexChild ,  dados) {
        var valor;

        if(indexChild == 0) {
            times = [];
            datas = [];
            series = [];
            series2 = [];
            datas2  = [];

            times.push(dados.data_hora);
            datas.push(dados.reais);
            datas2.push(dados.energia);
            series2.push(dados.uniMedidaR);
            series.push(dados.uniMedidaR);

        }else{
            series2.push(dados.uniMedidaR);
            datas2.push(dados.energia);
            times.push(dados.data_hora);
            datas.push(dados.reais);
            series.push(dados.uniMedidaR);
        }
        $scope.labels[indexFather] =  times;
        $scope.series[indexFather] =  [
            series];
        $scope.data[indexFather] = [
            datas
        ];
//coments
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

    };
    console.log($scope.labels);
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







}]);