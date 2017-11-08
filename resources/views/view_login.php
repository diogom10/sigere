<!DOCTYPE html>
<html lang="pt-BR" ng-app="sigere_login">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?= url('/'); ?>/js/angular.min.js"></script>
        <script src="<?= url('/'); ?>/js/angular/controller/login/loginCtrl.js"></script>
        <script src="<?= url('/'); ?>/js/angular/service/login/loginService.js"></script>
    </head>
    <body>
        <div ng-controller="loginCtrl">
            <div class="container-fluid">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <div class="container">
                        <div class="row flex-items-md-right" >
                            <div class="col-md-6 col-sm-12">

                                <h2 class="text-center">Bem Vindo!</h2>
                                <h3 class="text-center">Por favor, digite seu usuário e senha </h3>

                                <form method="POST" action="">
                                    <!--<label>Usuário</label>-->
                                    <input type="text" name="usuario" placeholder="Username" class="form-control"><br>

                                    <!--<label>Senha</label>-->
                                    <input type="password" name="senha" placeholder="senha" class="form-control"><br>

                                    <input type="submit" name="btnLogin" value="Log in" class="btn btn-info btn-block">

                                    <div class="row"> 
                                        <div class="col-md-4 col-sm-12">
                                            <a href="#">Esqueceu sua Senha?</a>
                                        </div>
                                        <div class="offset-md-3 col-md-5 col-sm-12">	
                                            <a href="#" data-toggle="popover">Registrar uma nova conta!</a>
                                        </div>

                                    </div>
                                </form>
                                <?= view('view_login_cadastro')->render() ?>
                            </div>

                        </div>
                        <!--                        <button  ng-click="teste()" type="button" ng-click="teste()" class="btn btn-danger" data-toggle="popover">teste</button>-->

                    </div>			

                </div>
            </div>
        </div>
    </body>
</html>