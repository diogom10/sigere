<div style="display:none">
    <div id="view">

        <h2 class="text-center">Bem Vindo!</h2>
        <h3 class="text-center">Por favor, digite seu usuário e senha </h3>



            <input type="text" name="nome" placeholder="Username" ng-model="cadastro.nome" class="form-control"><br>
            <input type="email" name="email" placeholder="Email" ng-model="cadastro.email" class="form-control"><br>
            <input type="password" name="senha" placeholder="Senha" ng-model="cadastro.senha" class="form-control"><br>
            <div class="alert alert-danger">{{msgErro}}</div>
            
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                <button class="btn btn-success btn-block" ng-click="cadastrar()">Cadastrar</button>
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                <button class="btn btn-danger btn-block">Cancelar</button>
            </div>


        <!--                        <button  ng-click="teste()" type="button" ng-click="teste()" class="btn btn-danger" data-toggle="popover">teste</button>-->

    </div>
</div>