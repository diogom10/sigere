<!DOCTYPE html>
<html lang="pt-BR" ng-app="sigere_home">
    <head>

        <link rel="stylesheet" href="<?= url('/'); ?>/scss/home.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?= url('/'); ?>/js/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
        <script src="//cdn.jsdelivr.net/angular.chartjs/latest/angular-chart.min.js"></script>
        <script src="<?= url('/'); ?>/js/angular/controller/home/homeCtrl.js"></script>
        <script src="<?= url('/'); ?>/js/angular/service/home/homeService.js"></script>

    </head>
    <body ng-controller="homeCtrl">
        <input type="hidden" id="session" value="<?= session()->get('user_status_login'); ?>">
        <input type="hidden" id="url" value="<?= url('/'); ?>">
        <input type="hidden" id="user_id" value="<?= session()->get('user_id'); ?>">

        <?php
        if (!session()->get('user_status_login')) {
            header("Location:" . url('/') . "/login");
            die();
        } else {
            ?>

            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 cabecalho">
                <span class=" col-md-11 col-sm-11 col-xs-11 col-lg-11 title-login">SIGERE</span>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Logout</button>
            </div>

            <?= view('home/modal_logout')->render(); ?>


          
             
                <div class="col-md-3 col-sm-12 col-xs-12 col-lg-3">
                    <canvas id="line" class="chart chart-line ng-isolate-scope" chart-data="data"
                            chart-labels="labels" chart-series="series" chart-options="options"
                            chart-dataset-override="datasetOverride" chart-click="onClick">
                    </canvas>
                </div>
         
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 rodape" ></div>
            <?php
        }
        ?>

    </body>
</html>