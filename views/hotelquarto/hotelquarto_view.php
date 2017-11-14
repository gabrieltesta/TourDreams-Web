<?php

    require_once('controllers/hotelquarto_controller.php');

    $controller_hotel = new ControllerHotel;
    $rs = $controller_hotel->BuscaHotel();
    $row2 = $controller_hotel->BuscaImagemHotel();
    $row3 = $controller_hotel->BuscaPrimeiraImagem();
    $row4 = $controller_hotel->BuscaComodidadesHotel();
    $row5 = $controller_hotel->BuscaQuarto();
    $avaliacoes = $controller_hotel->BuscaAvaliacao();

    $cont = 0;

    while($cont<count($rs)){

?>

<!--Conteúdo superior-->
<section id="sectionCima">
    <div id="contCima">
        <!--Detalhes do Hotel-->
        <div id="divTitulos">
            <table id="tblTitulo">
                <tr>
                    <td id="tdnomeHotel"><?php echo($rs[$cont]->hotel); ?></td>
                    <td id="tdlocalHotel"><?php echo($rs[$cont]->logradouro); ?> N° <?php echo($rs[$cont]->numero); ?>, <?php echo($rs[$cont]->bairro); ?>, <?php echo($rs[$cont]->cidade); ?> - <?php echo($rs[$cont]->uf); ?></td>
                    <td id="tdEstrelas">
                        <?php

                            $i = 1;
                            while($i <= $rs[$cont]->qtdEstrelas){
                        ?>
                            <img draggable="false" alt="" src="imagens/busca/estrela.png">
                        <?php
                                $i++;
                            }
                        ?>
                    </td>
                    <td id="tdAvaliacao">9,6</td>
                </tr>
            </table>
        </div>
        <!---->
        <div id="divInformacoes">
            <!--Slider-->
            <div id="divisao1">
                <div id="divImgGrande">
                    <?php
                        $x= 0;

                        while($x < count($row3)){
                    ?>
                    <img draggable="false" alt="" src="<?php echo($row3[$x]->firstImg); ?>">

                    <?php
                        $x++;
                        }
                    ?>
                </div>
                <div id="carrossel">
                    <?php


                        $contador = 0;
                        while ($contador < count($row2)){
                    ?>
                    <div class="miniatura" onclick="trocaImg('<?php echo($row2[$contador]->caminhoImagem); ?>')"><img draggable="false" alt="" src="<?php echo($row2[$contador]->caminhoImagem); ?>"></div>
                    <?php
                        $contador++;
                    }
                    ?>
                </div>
            </div>
            <!---->
            <div id="divisao2">
                <div id="divHorarios">
                    <table id="tableHorarios">
                        <tr>
                            <td><img draggable="false" alt="" src="imagens/hotelquarto/calendarIn.png"><span>Check-in: <?php echo($rs[$cont]->checkin); ?></span></td>
                            <td><img draggable="false" alt="" src="imagens/hotelquarto/calendarOut.png"><span>Check-out: <?php echo($rs[$cont]->checkout); ?></span></td>
                        </tr>
                    </table>
                </div>

                <div id="divInfoHotel"><?php echo($rs[$cont]->descricao); ?></div>
            </div>

        <?php
            $cont++;
            }
        ?>
        <!-- Div de Comodidades -->
        <hr>
        <div id="divComodidades">

            <div class="separador">

                    <?php
                        $contador2 = 0;

                        while($contador2 < count($row4)){

                            $cur = 0;
                            foreach($row4 as $value){
                                if($cur == 0)
                                {
                                    echo '<ul>';
                                }
                                echo '    <li>' . $row4[$contador2]->comodidadeHotel . '</li>';
                                $contador2++;
                                if($cur == 5)
                                {
                                    echo '</ul>';
                                    $cur = 0;
                                }
                                else
                                {
                                    $cur++;
                                }
                            }


                        }
                    ?>

            </div>

        </div>
        <hr>
    </div>
    </div>
</section>
<!---->
<!--Conteúdo inferior-->
<section id="sectionBaixo">
    <div id="contBaixo">
        <?php
            $contador3 = 0;

            while($contador3<count($row5)){

                $preco = number_format($row5[$contador3]->vlrDiario,2,",","");
        ?>
        <!-- Sugestões de Quarto -->
        <div class="divQuarto">
            <div class="divInfoQuarto">
                <div class="imgQuarto">
                    <img draggable="false" alt="" src="<?php echo($row5[$contador3]->caminhoImagem); ?>">
                </div>
                <div class="divTituloQuarto">
                    <div class="nomeQuarto">
                        <?php echo($row5[$contador3]->nomeQuarto); ?>
                    </div>
                </div>
                <div class="textoQuarto"><?php echo($row5[$contador3]->descricao); ?></div>
                <div class="comodidadesQuarto">
                    <h1>Inclusos neste quarto</h1>
                    <?php
                        $contador = 0;
                        while($contador < 10){
                    ?>
                    <div class="comodidadeDoQuarto">
                        <ul>
                            <li>Wi-Fi</li>
                        </ul>
                    </div>
                    <?php
                            $contador++;
                        }
                    ?>
                </div>
            </div>

            <div class="divReservar"> <!-- botão para reservar -->
                <div class="divPreco">
                    <h3>Diárias de</h3>
                    <h1>R$ <?php echo($preco); ?></h1>
                </div>
                <?php
                    if(isset($_SESSION['login'])){
                        if($_SESSION['login'] == 'true'){

                            $_SESSION['idQuarto'] = $row5[$contador3]->idQuarto;
                ?>
                            <div class="botaoReservar">
                                <a href="reserva.php"><h1>RESERVAR</h1></a>
                            </div>

                <?php
                        }
                    }else{


                ?>
                    <a href="Login.php"><div class="botaoReservar">
                        <h1>RESERVAR</h1>
                    </div></a>
                <?php
                    }
                ?>
            </div>


        </div>
        <?php
                $contador3++;
            }
        ?>
    </div>
</section>
<section id="sectionAvaliacao">
    <div id="avaliacaoBox">
        <div id="avaliacaoConteudoEsquerdo">
            <?php
                $atendimento = round($avaliacoes->atendimento);
                $conforto = round($avaliacoes->conforto);
                $lazer = round($avaliacoes->lazer);
                $limpeza = round($avaliacoes->limpeza);
                $localizacao = round($avaliacoes->localizacao);
                $preco = round($avaliacoes->preco);

             ?>
            <h1>Excelente</h1>
            <table>
                <tr>
                    <td>Atendimento</td>
                </tr>
                <tr>
                    <td><div class="barraAvaliacao"><div class="progresso avaliacaoAtendimento" style="width:<?php echo($atendimento); ?>%;"></div></div><span><?php echo(number_format($avaliacoes->atendimento)) ?></span></td>
                </tr>
                <tr>
                    <td>Conforto</td>
                </tr>
                <tr>
                    <td><div class="barraAvaliacao"><div class="progresso avaliacaoConforto" style="width:<?php echo($conforto); ?>%;"></div></div><span><?php echo(number_format($avaliacoes->conforto)) ?></span></td>
                </tr>
                <tr>
                    <td>Lazer</td>
                </tr>
                <tr>
                    <td><div class="barraAvaliacao"><div class="progresso avaliacaoLazer" style="width:<?php echo($lazer); ?>%;"></div></div><span><?php echo(number_format($avaliacoes->lazer)) ?></span></td>
                </tr>
                <tr>
                    <td>Limpeza</td>
                </tr>
                <tr>
                    <td><div class="barraAvaliacao"><div class="progresso avaliacaoLimpeza"  style="width:<?php echo($limpeza); ?>%;"></div></div><span><?php echo(number_format($avaliacoes->limpeza)) ?></span></td>
                </tr>
                <tr>
                    <td>Localização</td>
                </tr>
                <tr>
                    <td><div class="barraAvaliacao"><div class="progresso avaliacaoLocalizacao" style="width:<?php echo($localizacao); ?>%;"></div></div><span><?php echo(number_format($avaliacoes->localizacao)) ?></span></td>
                </tr>
                <tr>
                    <td>Preço</td>
                </tr>
                <tr>
                    <td><div class="barraAvaliacao"><div class="progresso avaliacaoPreco" style="width:<?php echo($preco); ?>%;"></div></div><span><?php echo(number_format($avaliacoes->preco)) ?></span></td>
                </tr>
            </table>
        </div>
        <div id="avaliacaoConteudoDireito">
            <form action="#" method="post">
                <table>
                    <tr>
                        <td colspan="2"><h2>Envie sua avaliação!</h2></td>
                    </tr>
                    <tr>
                        <th>Atendimento</th><td><input type="number" name="txtAtendimento" value="50" min="0" max="100" required></td>
                    </tr>
                    <tr>
                        <th>limpeza</th><td><input type="number" name="txtlimpeza" value="50" min="0" max="100" required></td>
                    </tr>
                    <tr>
                        <th>Lazer</th><td><input type="number" name="txtLazer" value="50" min="0" max="100" required></td>
                    </tr>
                    <tr>
                        <th>Limpeza</th><td><input type="number" name="txtLimpeza" value="50" min="0" max="100" required></td>
                    </tr>
                    <tr>
                        <th>Localização</th><td><input type="number" name="txtLocalizacao" value="50" min="0" max="100" required></td>
                    </tr>
                    <tr>
                        <th>Preço</th><td><input type="number" name="txtPreco" value="50" min="0" max="100" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="btnEnviar" value="ENVIAR"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</section>
<!---->
