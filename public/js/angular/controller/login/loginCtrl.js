angular.module("sigere_login", []);
angular.module("sigere_login").controller("loginCtrl", ['$scope', '$http', 'loginService', function ($scope, $http, loginService) {
        $scope.cadastro = {nome: "", email: "", senha: ""};
        $scope.login = {email: "", senha: ""};
        $scope.error = false;
        
        $scope.cadastrar = function () {
            loginService.setCadastro($scope.cadastro, 'Cadastro').then(function (response) {
                if (response.data.success) {
                    $scope.msgErro = response.data.msg;
                    $scope.error = false;
                } else {
                    $scope.error = true;
                    $scope.msgErro = response.data.msg;
                }
            });
        };


     $scope.getLogin = function () {
            loginService.setCadastro($scope.login, 'getLogin').then(function (response) {
                if (response.data.success) {
                    $scope.msgErro = response.data.msg;
                    $scope.error = false;
                } else {
                    $scope.error = true;
                    $scope.msgErro = response.data.msg;
                }
            });
        };


        $(document).ready(function () {
            var PopoverTags = angular.element("#view");
            angular.element('body').on('mouseenter', '[data-toggle="popover"]', function () {

                var Este = $(this);
                if (!Este.is('.has-popover')) {
                    Este.popover({content: PopoverTags, html: true, placement: 'top', container: 'body'});
                    Este.addClass('has-popover');
                }
            });
        });
    }]);