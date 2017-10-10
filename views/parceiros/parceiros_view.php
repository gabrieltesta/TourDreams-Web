<?php



 ?>

<section class="section">

    <div id="divisoria"> <!-- Titulo da pagina -->

        <div id="primeira">
            <hr>

        </div>
        <div id="segunda">
            Parceiros
        </div>
         <div id="terceira">
        <hr>
        </div>


    </div>
    <div id="esquerda">

        <div id="divisor">

            <div id="iconeesquerdo"></div>
            <div id="parceiroDestaque">Parceiros em Destaque</div>

        </div>


        <div class="parteDeBaixo">
          <?php

            require_once('controllers/parceirosDestaque_controller.php');

            $controllerParceiro_destaque = new ControllerParceiroDestaque();
            $rows = $controllerParceiro_destaque->Listar();

            $cont = 0;

            while ($cont < count($rows)) {



           ?>
          <div class="caixinhasConteudo">
              <div class="foto">
                  <img class="fotoParceiro" src="  <?php echo($rows[$cont]->imagem); ?>">
              </div>
              <div class="contCaixinhas">
                <div class="gato">

                </div>
                <div class="titulo">
                    <?php echo($rows[$cont]->nome); ?>
                </div>

              </div>
          </div>
          <?php
          $cont +=1;
          }
           ?>

        </div>



    </div>


    <div id="direita">

        <div id="principal">

                <?php



                 ?>

                <div id="busca">
                      <div class="tituloBusca">
                        <div id="iconedireito"></div>
                        <div id="parceiroBusca">Busca de Parceiros</div>
                      </div>

                    <div class="inputBusca">
                        <form action="#">
                          <select name="sltBusca" id="sltBusca">

                            <?php
                                require_once('controllers/parceirosDestaque_controller.php');

                                $controllerParceiro_destaque = new ControllerParceiroDestaque();
                                $rows = $controllerParceiro_destaque->Listar();

                                $x = 0;

                                while ($x < count($rows)) {


                                  if($idParceiro == $rows[$x]->idParceiro){
                                    $marcar = "selected";
                                  }else{

                                    $marcar = "";

                                  }

                              ?>

                              <option <?php echo ($marcar); ?> value="<?php echo ($rows[$x]->idParceiro); ?>" ><?php echo ($rows[$x]->nome); ?></option>


                              <?php

                                $x++;
                                }
                              ?>
                          </select>
                      </form>
                    </div>

                </div>
                <div id="extra">


                </div>
        </div>
    </div>
</section>
