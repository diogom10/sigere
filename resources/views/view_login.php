<!DOCTYPE html>
<html lang="pt-BR" ng-app="sigere_login">
    <head>
         <link type="text/css" rel="stylesheet" href="<?= url('/');?> /sass/bootstrap.min.css">
         <script src="<?= url('/'); ?>/js/jquery-3.2.1.js"></script>
         <script src="<?= url('/'); ?>/js/angular.min.js"></script>
         <script src="<?= url('/'); ?>/js/bootstrap.js"></script>
         <script src="<?= url('/'); ?>/js/angular/controller/login/loginCtrl.js"></script>
         <script src="<?= url('/'); ?>/js/angular/service/login/loginService.js"></script>
    </head>
    <body>

        <div ng-controller="loginCtrl">
        <h1 ng-click="teste()">PRIMEIRA VIEW</h1>

        
        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4"></div>
        <button class="btn btn-danger" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">teste</button>
        <div>teste<div>
         <?= view('view_login_cadastro')->render() ?>
        </div>
        
      
        
    </body>
</html>