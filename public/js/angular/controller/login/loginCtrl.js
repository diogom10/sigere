
angular.module("sigere_login", []);
angular.module("sigere_login").controller("loginCtrl", ['$scope', '$http', 'loginService', function ($scope, $http, loginService) {

        $scope.teste = function () {





        };

        $(document).ready(function () {
            var PopoverTags = angular.element("#view");
            angular.element('body').on('mouseenter', '[data-toggle="popover"]', function () {
                var Este = $(this);
                if (!Este.is('.has-popover')) {
                    Este.popover({content: PopoverTags, html: true, placement: 'bottom', container: 'body'});
                    Este.addClass('has-popover');
                }
            });
        });
    }]);