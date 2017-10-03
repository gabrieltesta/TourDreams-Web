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

                <div id="busca">


                      <div class="tituloBusca">
                        <div id="iconedireito"></div>
                        <div id="parceiroBusca">Busca de Parceiros</div>
                      </div>

                    <div class="inputBusca">
                          <input class="barra" size="60" placeholder="Buscar Parceiro" value="" name="">

                          <input class="botao"type="image" value="btnbuscar" img src="Imagens/pesquisar.png">
                    </div>

                </div>

                <div id="extra">

                      <div id="imagemParceiro">
                       </div>


                        <div id="detalhes">

                          <div class="tituloBuscaParceiro">
                                Hotel Fazenda
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


    </div>
</section>
