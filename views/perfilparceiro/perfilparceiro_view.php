<section id="sectionEsquerda">
    <div id="contEsquerda">
        <div id="divSuperior">
            <div id="divFotoParceiro">
                <div id="trocarFoto">Trocar Foto</div>
                <img draggable="false" alt="" src="imagens/perfilparceiro/belmond.png">
                
            </div>
            <h2 id="nomeParceiro">
                Belmond
            </h2>
        </div>
        
        <div id="divTabela">
            <table class="sortable" cellspacing="0">
                <tr>
                    <th>
                        Foto
                    </th>
                    <th>
                        Nome
                    </th>
                    <th>
                        Qtd. de Quartos
                    </th>
                    <th>
                        Opções
                    </th>
                </tr>
                <?php
                    $i = 0;
                    while($i < 50){
                ?>
                <tr>
                    <td>
                        <img draggable="false" class="logoHotel" alt="" src="imagens/perfilparceiro/copacabanapalace.png">
                    </td>
                    <td>
                        Copacabana Palace
                    </td>
                    <td>
                        300
                    </td>
                    <td>
                        <img draggable="false" class="imgOpcao" alt="" src="imagens/perfilparceiro/editar.png"><img draggable="false" class="imgOpcao" alt="" src="imagens/perfilparceiro/plus.png">
                    </td>
                </tr>
                <?php
                        $i++;
                    }
                ?>
            </table>
        </div>
        
        <a href="cadastrohotel.php"><div id="btnRegistrar">
            <h1>Registrar Hotel</h1>
        </div></a>
    </div>
</section>

<section id="sectionDireita">
    <div id="contDireita">
        <div id="hotelClicado">
        
        </div>
    </div>
</section>