<!--Conteúdo superior-->
<section id="sectionCima">
    <div id="contCima">
        <!--Detalhes do Hotel-->
        <div id="divTitulos">
            <table id="tblTitulo">
                <tr>
                    <td id="tdnomeHotel">Hotel Exemplo</td>
                    <td id="tdlocalHotel">Rua Exemplo, Bairro Exemplo, Cidade Exemplo - SP</td>
                    <td id="tdEstrelas">
                        <?php
                            $quant = rand(1,5);
                            $i = 0;
                            while($i < $quant){
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
                    <img draggable="false" alt="" src="imagens/hotelquarto/mt1.jpg">
                </div>
                <div id="carrossel">
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt1.jpg')"><img draggable="false" alt="" src="imagens/hotelquarto/mt1.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt2.jpg')"><img draggable="false" alt="" src="imagens/hotelquarto/mt2.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt3.jpg')"><img draggable="false" alt="" src="imagens/hotelquarto/mt3.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt4.jpg')"><img draggable="false" alt="" src="imagens/hotelquarto/mt4.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt5.jpg')"><img draggable="false" alt="" src="imagens/hotelquarto/mt5.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt6.jpg')"><img draggable="false" alt="" src="imagens/hotelquarto/mt6.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt7.jpg')"><img draggable="false" alt="" src="imagens/hotelquarto/mt7.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt8.jpg')"><img draggable="false" alt="" src="imagens/hotelquarto/mt8.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt9.jpg')"><img draggable="false" alt="" src="imagens/hotelquarto/mt9.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt10.jpg')"><img draggable="false" alt="" src="imagens/hotelquarto/mt10.jpg"></div>
                </div>
            </div>
            <!---->
            <div id="divisao2">
                <div id="divHorarios">
                    <table id="tableHorarios">
                        <tr>
                            <td><img draggable="false" alt="" src="imagens/hotelquarto/calendarIn.png"><span>Check-in: 12:00</span></td>
                            <td><img draggable="false" alt="" src="imagens/hotelquarto/calendarOut.png"><span>Check-out: 08:00</span></td>
                        </tr>
                    </table>
                </div>
                
                <div id="divInfoHotel">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tempor venenatis orci eget placerat. Nunc vel feugiat libero. Integer sit amet mi ut nulla finibus semper ut et enim. Pellentesque in ultricies risus, at elementum velit. Suspendisse sollicitudin, metus eget viverra sagittis, dolor arcu suscipit nunc, non cursus massa nisl vitae augue. Proin pellentesque sodales urna, at ullamcorper nulla finibus sed. Sed tincidunt dui sit amet lacinia venenatis. Etiam nulla felis, placerat sit amet pretium vitae, eleifend volutpat enim. Maecenas eu arcu interdum, efficitur risus id, vehicula urna. Pellentesque nec pellentesque elit, quis accumsan mi. Etiam a aliquet nisl, a laoreet urna. Nulla sit amet diam sit amet tortor viverra tempor. Nulla accumsan dictum sem, volutpat convallis augue auctor tristique. Morbi nec nunc ex.

                    

                    
            </div>
        </div>
        <!-- Div de Comodidades -->
        <hr>
        <div id="divComodidades">
            
            <?php
                $y = 0;
                while($y<3){
            ?>
            <div class="separador">
                <?php
                    $i = 1;
                    
                    while($i <= 4){
                ?>
                    <div class="comodidade">
                        <img draggable="false" alt="" src="imagens/hotelquarto/piscina.png"><h2>Piscina</h2>
                    </div>
                <?php
                        $i++;
                        $cont = $i; 
                    }
                ?>
            </div>
            <?php
                    $y++;
                }
            ?>
            
        
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
            $z = 0;
            while($z < 5){
        ?>
        <!-- Sugestões de Quarto -->
        <div id="divQuarto">
            <div class="divInfoQuarto">
                <div class="imgQuarto">
                    <img draggable="false" alt="" src="imagens/hotelquarto/bedroom.jpg">
                </div>
                <div class="divTituloQuarto">
                    <div class="nomeQuarto">
                        Quarto Exemplo
                    </div>
                    
                    <div class="estrelaQuarto">
                        <?php
                            $quantstar = rand(1,5);
                            $x = 0;
                            while($x < $quantstar){
                        ?>
                        <img alt="" src="imagens/busca/estrela.png">
                        <?php
                            $x++;
                            }
                        
                        ?>
                    </div>
                </div>
                <div class="textoQuarto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tempor venenatis orci eget placerat. Nunc vel feugiat libero. Integer sit amet mi ut nulla finibus semper ut et enim. Pellentesque in ultricies risus, at elementum velit. Suspendisse sollicitudin, metus eget viverra sagittis, dolor arcu suscipit nunc, non cursus massa nisl vitae augue. Proin pellentesque sodales urna, at ullamcorper nulla finibus sed. Sed tincidunt dui sit amet lacinia venenatis. Etiam nulla felis, placerat sit amet pretium vitae, eleifend volutpat enim. Maecenas eu arcu interdum, efficitur risus id.
                </div>
                <div class="comodidadesQuarto">
                    <h1>Inclusos neste quarto</h1>
                    <?php
                        $contador = 0;
                        while($contador < 10){
                    ?>
                    <div class="comodidadeDoQuarto">
                        <img alt="" src="imagens/hotelquarto/wifi.png"><h2>Wi-Fi</h2>
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
                    <h1>R$ 199,99</h1>
                </div>
                <div class="botaoReservar">
                    <h1>RESERVAR</h1>
                </div>
            </div>
            
            
        </div>
        <?php
                $z++;
            }
        ?>
    </div>
</section>
<!---->
