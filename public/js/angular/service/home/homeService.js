

angular.module("sigere_home").service('homeService', ['$http', function ($http) {

        var __logout = function (parametros, url) {

            return $http({
                method: 'POST',
                url: url,
                data: $.param({destroy:parametros}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        };

         var __getEnergia = function (parametros, url) {

            return $http({
                method: 'POST',
                url: url,
                data: $.param({user_id:parametros}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        };

        return {
            logout: __logout,
            getEnergia:__getEnergia
        };

    }]);