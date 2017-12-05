

angular.module("sigere_home").service('homeService', ['$http', function ($http) {

        var __logout = function (parametros, url) {

            return $http({
                method: 'POST',
                url: url,
                data: $.param({destroy:parametros}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        };
         var __getGraficos = function (parametros, url) {

            return $http({
                method: 'POST',
                url: url,
                data: $.param({id:parametros}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        };

        return {
            logout: __logout,
            getGraficos : __getGraficos
        };

    }]);