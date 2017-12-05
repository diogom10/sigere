<!DOCTYPE html>
<html lang="pt-BR" ng-app="sigere_home">
    <head>

        <link rel="stylesheet" href="<?= url('/'); ?>/scss/home.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?= url('/'); ?>/js/angular.min.js"></script>
        <script src="<?= url('/'); ?>/js/angular/controller/home/homeCtrl.js"></script>
        <script src="<?= url('/'); ?>/js/angular/service/home/homeService.js"></script>

    </head>
    <body ng-controller="homeCtrl">
        <input type="hidden" id="session" value="<?= session()->get('user_status_login'); ?>">
        <input type="hidden" id="url" value="<?= url('/'); ?>">
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 cabecalho">
            <span class=" col-md-12 col-sm-12 col-xs-12 col-lg-12 title-login">SIGERE</span>
        </div>
        <!--            <h1> BEM VINDO</h1>-->

        <!-- Button to Open the Modal -->
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

        <!-- Modal -->


        <?= view('modals/modal_logout')->render(); ?>
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 rodape" ></div>
    </body>
</html>