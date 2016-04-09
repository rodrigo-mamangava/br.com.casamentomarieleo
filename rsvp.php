<div id="rsvp"class="sessao">

    <?php require './rococo.php'; ?>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 ">

            <p>Confirme sua presença nessa festa inesquecível!!!</p>
            <p ng-show="message3.msg"> {{message3.msg}}</p>

            
            
            <form ng-hide="message3.code" id="form-rsvp" name="formRsvp" novalidate
                  ng-submit="processFormRsvp()"
                  >
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" 
                           placeholder="NOME" name="nome"
                           ng-model="rsvp.nome" ng-required="true"
                           >
                </div>

                <div class="row" style="padding-bottom: 10px">
                    <div class="col-xs-12 col-sm-6">
                        <p>Confirma presença?</p>
                        <div class="radio">
                            <label class="radio-inline">
                                <input type="radio" name="presenca" 
                                       id="inlineRadio1" value="sim"
                                       ng-model="rsvp.presenca" 
                                       ng-required="rsvp.presenca !=''"
                                       > SIM =)
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="presenca" 
                                       id="inlineRadio2" value="nao"
                                       ng-model="rsvp.presenca" 
                                       ng-required="rsvp.presenca !='' "
                                       > NÃO =(
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="number" class="form-control" 
                               id="exampleInputEmail1" 
                               placeholder="NÚMERO DE CONFIRMADOS"
                               name="numero"
                               ng-model="rsvp.numero" ng-required="true"
                               min="1"
                               >
                    </div>
                </div>

                <div class="row ">
                    <div class="col-xs-6">
                        <input type="email" class="form-control" 
                               id="exampleInputEmail1" 
                               placeholder="Email"
                               name="email"
                               ng-model="rsvp.email" ng-required="true"
                               >
                    </div>
                    <div class="col-xs-6">
                        <input type="tel" class="form-control" 
                               id="exampleInputEmail1" 
                               placeholder="TEL:"
                               name="tel"
                               ng-model="rsvp.tel" ng-required="true"
                               >
                    </div>
                </div>

                <input type="hidden" name="formname" value="rsvp">

                <button type="submit" class="btn btn-default" 
                        ng-disabled="formRsvp.$invalid" 
                        >Enviar</button>
            </form>
            </div>

        </div>

    </div>



</div><!-- rsvp -->