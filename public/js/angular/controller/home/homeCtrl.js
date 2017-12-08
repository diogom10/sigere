
angular.module("sigere_home", ["chart.js"]).controller("homeCtrl", ['$scope', '$http', 'homeService', function ($scope, $http, homeService) {

        $scope.session = angular.element('#session').val();
        var base_url = angular.element('#url').val();
        var user_id = angular.element('#user_id').val();


        $scope.labels = [];
        $scope.series = [];
        $scope.data = [] ;
        $scope.array = ['1' , '2' , '3'];


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


    $scope.teste = [
        ["January", "February", "March", "April"],
        ["January", "February", "March", "April", "May", "June", "July"],
        ["January", "February", "March", "April", "May", "June"]
    ];


$scope.graficos = function(index , labels) {

    $scope.labels[index] = labels[index];
    $scope.series = ['Series B'];
    $scope.data[index] = [
        [100, 0, 60, 70, 80, 10, 40],
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

};


  //
  // $scope.array.forEach(function( value , index){
  //     $scope.graficos(index);
  // });






    }]);