
angular.module("sigere_home" , ["chart.js"] ).controller("homeCtrl", ['$scope', '$http', 'homeService', function ($scope, $http, homeService) {

        $scope.session = angular.element('#session').val();
        var base_url = angular.element('#url').val();
        var user_id = angular.element('#user_id').val();
        
        

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

         
        $scope.labels = ["January", "February", "March", "April", "May", "June", "July"];
        $scope.series = ['Series B'];
        $scope.data1 = [
            [100, 0, 60, 70, 80, 10, 400]
        ];
        $scope.onClick = function (points, evt) {
            console.log(points, evt);
        };
        $scope.datasetOverride = [{yAxisID: '2'}];
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
        
        
        $scope.labels = ["January", "February", "March", "April", "May", "June", "July"];
        $scope.series = ['Series A'];
        $scope.data2 = [
            [100, 1000, 60, 70, 80, 10, 400]
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