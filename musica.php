<div id="musica"class="sessao">


    <?php require './rococo.php'; ?>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 ">

            <p>Queremos que a nossa festa seja super animada e gostaríamos de saber, qual música que você acha que não pode faltar na nossa festa de casamento.</p>
            <p ng-show="message2.msg"> {{message2.msg}}</p>




            <form  ng-hide="message2.code" name="formMusica" novalidate ng-submit="processFormMusica()">
                <div class="form-group">
                    <input type="text" class="form-control" 
                           id="exampleInputEmail1" placeholder="Nome da música"
                           ng-model="musica.nome" ng-required="true"
                           name="nome"
                           >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" 
                           id="exampleInputPassword1" placeholder="Observação"
                           ng-model="musica.obs"
                           name="obs"
                           >
                </div>
                <input type="hidden" name="formname" value="musi">
                <button type="submit" class="btn btn-default" 
                        ng-disabled="formMusica.$invalid"
                        >Enviar</button>
            </form>

        </div>
    </div>



</div><!-- musica -->