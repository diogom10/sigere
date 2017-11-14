var base_url = "http://localhost/sigere/public/index.php/";


angular.module("sigere_login").service('loginService', ['$http', function ($http) {
//
//           var __create = function (dados, metodo) {
//
//            return $http(
//                    {
//                        method: 'POST',
//                        url: base_url + metodo,
//                        data: $.param(dados),
//                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
//                        //  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
//                    });
//        } /* __getBancos */

    var __setCadastro = function (parametros , metodo){
        
        return $http({
           method:'POST',
           url:base_url+metodo,
           data:$.param(parametros),
           headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        });
    };
    
   
      return {
        setCadastro:__setCadastro  
      };
    }]);