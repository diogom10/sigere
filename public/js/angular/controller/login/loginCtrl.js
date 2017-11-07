
angular.module("sigere_login", []);
angular.module("sigere_login").controller("loginCtrl", ['$scope', '$http', 'loginService', function ($scope, $http, loginService) {

        $scope.teste = function () {
            alert('paulao');
        };
        
//            var popoverDynamic = angular.element("#view");
//            $('.screen').show();
//            $('[data-toggle="popover"]').popover({html: true, content: popoverDynamic, placement: 'right'});
        
          $(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
});
    }]);