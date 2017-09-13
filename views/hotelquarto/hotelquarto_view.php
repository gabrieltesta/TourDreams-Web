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
                            <img alt="" src="imagens/busca/estrela.png">
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
                    <img alt="" src="imagens/hotelquarto/mountaingrey.jpg">
                </div>
                <div id="carrossel">
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt1.jpg')"><img alt="" src="imagens/hotelquarto/mt1.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt2.jpg')"><img alt="" src="imagens/hotelquarto/mt2.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt3.jpg')"><img alt="" src="imagens/hotelquarto/mt3.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt4.jpg')"><img alt="" src="imagens/hotelquarto/mt4.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt5.jpg')"><img alt="" src="imagens/hotelquarto/mt5.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt6.jpg')"><img alt="" src="imagens/hotelquarto/mt6.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt7.jpg')"><img alt="" src="imagens/hotelquarto/mt7.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt8.jpg')"><img alt="" src="imagens/hotelquarto/mt8.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt9.jpg')"><img alt="" src="imagens/hotelquarto/mt9.jpg"></div>
                    <div class="miniatura" onclick="trocaImg('imagens/hotelquarto/mt10.jpg')"><img alt="" src="imagens/hotelquarto/mt10.jpg"></div>
                </div>
            </div>
            <!---->
            <div id="divisao2">


            </div>
        </div>
        <!-- Div de Comodidades -->
        <hr>
        <div id="divComodidades">
            <table>
            
            </table>
        </div>
        <hr>
    </div>
</section>
<!---->
<!--Conteúdo inferior-->
<section id="sectionBaixo">
    <div id="contBaixo">
        <div id="divQuarto">
            <div class="divInfoQuarto">
                <div class="imgQuarto">
                
                </div>
            </div>
            
            <div class="divReservar">
            
            </div>
            
            
        </div>

    </div>
</section>
<!---->
