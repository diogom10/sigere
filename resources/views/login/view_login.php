<!DOCTYPE html>
<html lang="pt-BR" ng-app="sigere_login">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= url('/'); ?>/scss/login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?= url('/'); ?>/js/angular.min.js"></script>
        <script src="<?= url('/'); ?>/js/angular/controller/login/loginCtrl.js"></script>
        <script src="<?= url('/'); ?>/js/angular/service/login/loginService.js"></script>
    </head>
    <body ng-controller="loginCtrl">
        <input type="hidden" id="url" value="<?= url('/'); ?>">

        <?php
        if (session()->get('user_status_login')) {
            header("Location:" . url('/') . "/home");
            die();
        } else {
            ?>
            <div>
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 cabecalho">

                    <span class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 title-login">SIGERE</span>

                </div>
                <div class="container">

                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 ctrl-bottom"></div>
                    <div class="col-md-1 col-sm-12 col-xs-12 col-lg-1 ctrl-right"></div>
                    <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                            <div class="container">
                                <div class="row flex-items-md-right" >
                                    <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">

                                        <h2 class="text-center">Bem Vindo!</h2>
                                        <h3 class="text-center">Por favor, digite seu usuário e senha </h3>

                                        <!--<label>Usuário</label>-->
                                        <input type="text" name="usuario" placeholder="Email" ng-model="login.email" class="form-control"><br>

                                        <!--<label>Senha</label>-->
                                        <input type="password" name="senha" placeholder="Senha" ng-model="login.senha" class="form-control"><br>

                                        <input type="submit" name="btnLogin"  ng-click="getLogin()" value="Log in" class="btn btn-info btn-block">

                                        <div class="row"> 
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                                                <a href="#">Esqueceu sua Senha?</a>
                                            </div>

                                            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">	
                                                <a href="#" data-toggle="popover" class="cadastro">Registrar uma nova conta!</a>
                                            </div>
                                        </div>
                                        <div class="p-erro" ng-show="errorLogin">
                                            <span class=" alert alert-danger" ng-bind="msgErroLogin" ></span>
                                        </div>
                                        <?= view('login/view_login_cadastro')->render() ?>
                                    </div>

                                </div>
                                <!--                        <button  ng-click="teste()" type="button" ng-click="teste()" class="btn btn-danger" data-toggle="popover">teste</button>-->
                            </div>			
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 rodape" ></div>
            </div>
        <?php } ?>

    </body>
</html>