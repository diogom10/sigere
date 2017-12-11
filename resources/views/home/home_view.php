<!DOCTYPE html>
<html lang="pt-BR" ng-app="sigere_home">
    <head>

        <link rel="stylesheet" href="<?= url('/'); ?>/scss/home.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
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
        $teste = [ '1' , '2', '2'];
        if (!session()->get('user_status_login')) {
            header("Location:" . url('/') . "/login");
            die();
        } else {
            ?>

        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 cabecalho">
                <span class=" col-md-11 col-sm-11 col-xs-11 col-lg-11 title-login">SIGERE</span>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Logout</button>
            </div>
            <nav class="navbar navbar-toggleable-md navbar-light bg-info">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Navbar</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <?= view('home/modal_logout')->render(); ?>

            <div ng-repeat="a in array track by $index" ng-init="graficos($index , teste)">
              <div class="col-md-12 col-sm-12 col-xs-4 col-lg-4">
                  <h1>{{$index}}</h1>
                <canvas id="line" class="chart chart-line ng-isolate-scope" chart-data="data[$index]" chart-labels="labels[$index]" chart-series="series" chart-options="options"></canvas>
             </div>
            </div>



            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 rodape" ></div>
            <?php
        }
        ?>

    </body>
</html>