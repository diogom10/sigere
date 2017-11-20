angular.module("sigere_home", []);
angular.module("sigere_home").controller("homeCtrl", ['$scope', '$http', 'homeService', function ($scope, $http, homeService) {

        $scope.session = angular.element('#session').val();
        var base_url = angular.element('#url').val() + '/index/';
        //   !$scope.session ? window.location.assign(base_url + 'login') : false;

        $scope.logout = function () {
            alert($scope.session);
        };

        $(document).ready(function () {
            $("#MyModal").modal();
        });
    }]);