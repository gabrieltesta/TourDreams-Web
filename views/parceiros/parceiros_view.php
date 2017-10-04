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

                  <form class="" action="router.php?controller=buscarParceiro&modo=buscar" method="post">


                      <div class="tituloBusca">
                        <div id="iconedireito"></div>
                        <div id="parceiroBusca">Busca de Parceiros</div>
                      </div>

                    <div class="inputBusca">
                          <select name="sltBusca">

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

                          <input class="botao"type="image" value="btnbuscar" type="submit" img src="Imagens/pesquisar.png">
                    </div>

                </div>

                <?php

                $nomeParceiro = null;

                if(isset($_GET['modo'])){
                  if($_GET['modo'] == 'buscar'){

                  $nomeParceiro = $result->nomeParceiro;
                  $idParceiro = $result->idParceiro;

                }
              }
                 ?>

                <div id="extra">

                      <div id="imagemParceiro">
                       </div>


                        <div id="detalhes">

                          <div class="tituloBuscaParceiro">
                              <?php

                              echo ($nomeParceiro);

                               ?>
                          </div>
                          <div class="texto">
                            "Lorem ipsum dolor sit amet, consectetur
                             adipiscing elit, sed do eiusmod tempor
                             incididunt ut labore et dolore magna aliqua.
                             Ut enim ad minim veniam, quis nostrud exercitation
                              ullamco laboris nisi ut aliquip ex ea commodo
                              consequat. Duis aute irure dolor"
                          </div>
                        </div>
                        <div id="buttonEntrar"  onmousedown="return false">
                           Ver mais detalhes
                        </div>
                </div>



        </div>

      </form>
    </div>
</section>
