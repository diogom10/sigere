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
            <h1>PRIMEIRA VIEW</h1>
            <div class="container-fluid">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <button  type="button" ng-click="teste()" class="btn btn-danger" data-toggle="popover">teste</button>
                    <?= view('view_login_cadastro')->render() ?>
                </div>
            </div>
        </div>
    </body>
</html>