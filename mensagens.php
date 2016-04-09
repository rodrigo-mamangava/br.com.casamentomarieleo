<div id="mensagens"class="sessao">

    <?php require './rococo.php'; ?>


    <div class="row bolas-p bolas-p-4">
        <div class="col-xs-12 ">
            <img src="image/png/coracao-conjunto.png" class="img-responsive hidden-xs">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 ">

            <p ng-hide="message1.code == true">Deixe suas mensagens aos noivos!</p>
            <p ng-show="message1.msg"> {{message1.msg}}</p>

            <div ng-hide="message1.code">
            <form name="formMsg" novalidate ng-submit="processFormMsg()">
                <div class="form-group">
                    <input type="text" name="nome" class="form-control" 
                           id="exampleInputEmail1" placeholder="Seu nome"
                           ng-model="msg.nome" ng-required="true"
                           >
                </div>
                <div class="form-group">
                    <textarea name="texto" class="form-control" rows="3"  
                              placeholder="Sua mensagem..." 
                              ng-model="msg.texto" ng-required="true"
                              ></textarea>
                </div>
                
                <button type="submit" class="btn btn-default" ng-disabled="formMsg.$invalid">Enviar</button>
            </form>
            </div>





        </div>
    </div>



</div><!-- mensagens -->