

<!DOCTYPE html>
<html lang="pt-BR" >
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= url('/'); ?>/scss/login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?= url('/'); ?>/js/angular.min.js"></script>
        <script src="<?= url('/'); ?>/js/angular/controller/login/loginCtrl.js"></script>
        <script src="<?= url('/'); ?>/js/angular/service/login/loginService.js"></script>
    </head>
    <body>
        <div>
            <h1> BEM VINDO <?= session()->get('user_name')?></h1>
        </div>
    </body>
</html>