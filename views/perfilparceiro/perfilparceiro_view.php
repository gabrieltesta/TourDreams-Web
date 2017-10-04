<?php

    if($_SESSION['login'] != 'true')
    {
        header('location: homepage.php');
    }
    //Inclusão do arquivo controller para fazer o SELECT.
    require_once('controllers/parceiros_controller.php');

    /*Instância do objeto da controller e chamada para metódo de listagem
    dos registros*/
    $controller_parceiro = new ControllerParceiro();
    $parceiro = $controller_parceiro -> Buscar($_SESSION['idLogin']);

?>

<section id="sectionEsquerda">
    <div id="contEsquerda">
        <div id="divSuperior">
            <div id="divFotoParceiro">
                <div id="trocarFoto">Trocar Foto</div>
                <img draggable="false" alt="" src="<?php echo($parceiro->caminhoImg); ?>">

            </div>
            <h2 id="nomeParceiro">
                <?php echo($parceiro->nome); ?><a href="router.php?controller=deslogar"><img src="imagens/perfilusuario/logout.png" alt="Fazer Logout"></a>
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
                    while($i < 20){
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
                        <img title="Editar hotel" draggable="false" class="imgOpcao" alt="" src="imagens/perfilparceiro/editar.png"><img title="Adicionar quarto" draggable="false" class="imgOpcao" alt="" src="imagens/perfilparceiro/plus.png">
                    </td>
                </tr>
                <?php
                        $i++;
                    }
                ?>
            </table>
        </div>

        <a href="cadastrohotel.php?idParceiro=<?php echo($parceiro->idParceiro); ?>"><div id="btnRegistrar">
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
