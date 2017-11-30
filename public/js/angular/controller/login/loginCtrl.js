angular.module("sigere_login", []);
angular.module("sigere_login").controller("loginCtrl", ['$scope', '$http', 'loginService', function ($scope, $http, loginService) {
        $scope.session = angular.element('#session').val();
        $scope.msgErroLogin;
        $scope.errorLogin = false;

        var base_url = angular.element('#url').val() + "/index.php";
        $scope.cadastro = {nome: "", email: "", senha: ""};
        $scope.login = {email: "", senha: ""};
        $scope.error = false;


        
        $scope.cadastrar = function () {
            loginService.setCadastro($scope.cadastro, base_url + 'Cadastro').then(function (response) {
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
            if ($scope.login.email != "" && $scope.login.senha != "") {

                loginService.getLogin($scope.login, base_url + '/getLogin').then(function (response) {
                    if (response.data.success) {
                        window.location.assign(base_url + '/home');
                    } else {
                        $scope.errorLogin = true;
                        $scope.msgErroLogin = response.data.msg;
                    }

                });
            } else {
                $scope.errorLogin = true;
                console.log($scope.login.email);
                $scope.msgErroLogin = 'existem campos a serem preenchidos';
            }
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