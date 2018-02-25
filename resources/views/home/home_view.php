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
    <nav class="navbar navbar-toggleable-md navbar-light bg-info" style="margin-bottom: 0px;">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Sigere</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Equipamentos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Visualizar</a>
                        <a class="dropdown-item" href="#">Cadastrar</a>
                        <a class="dropdown-item" href="#">Editar</a>
                        <a class="dropdown-item" href="#">Deletar</a>
                    </div>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Relatório
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Dia</a>
                        <a class="dropdown-item" href="#">Mês</a>
                        <a class="dropdown-item" href="#">Ano</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <?= view('home/modal_logout')->render(); ?>
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 body-cor">
        <div class="col-md-10 col-sm-12 col-xs-12 col-lg-10 p-graficos">
            <div ng-repeat="a in energy" ng-init="sectionIndex = $index">
                <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                <span  class="p-checkbox">KW/H
                <input type="checkbox" value="KW/H" ng-model="isKw" ng-change="addKw($index, a , isKw)">
               </span>
                    <canvas id="line" class="chart chart-line ng-isolate-scope" chart-data="data[$index]" chart-labels="labels[$index]" chart-series="series[$index]" chart-options="options"></canvas>
                </div>
                <div ng-repeat="e in a  track by $index" ng-init="graficos(sectionIndex , $index ,e)">
                </div>

            </div>
        </div>
    </div>


    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 rodape" ></div>
    <?php
}
?>

</body>
</html>