

angular.module("sigere_login").service('loginService', ['$http', function ($http) {


        var __setCadastro = function (parametros, url) {

            return $http({
                method: 'POST',
                url: url,
                data: $.param(parametros),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        };

        var __getLogin = function (parametros, url) {

            return $http({
                method: 'POST',
                url: url,
                data: $.param(parametros),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        };


        return {
            setCadastro: __setCadastro,
            getLogin: __getLogin
        };
    }]);