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
                <?php echo($parceiro->nome); ?><a href="router.php?controller=deslogar"><img title="Logout" src="imagens/perfilusuario/logout.png" alt="Fazer Logout"></a><a href="router.php?controller=editarparceiro"><img title="Editar Perfil" src="imagens/perfilparceiro/edit.png" alt="Fazer Logout"></a>
            </h2>

        </div>


        <span id="titulo">Seus Hotéis</span>
        <div id="divTabela">
            <table class="sortable" cellspacing="0">

                <tr>
                    <th>
                        Nome
                    </th>
                    <th>
                        Qtd. de Estrelas
                    </th>
                    <th>
                        Tipo de Estadia
                    </th>
                    <th>
                        Opções
                    </th>
                </tr>
                <?php

                    require_once('controllers/perfilparceiro_controller.php');

                    $controller_perfilparceiro = new ControllerPerfilParceiro();
                    $rows = $controller_perfilparceiro->SelectHotel();

                    $cont = 0;


                    while($cont < count($rows)){

                ?>
                <tr>
                    <td>
                        <?php echo($rows[$cont]->hotel); ?>
                    </td>
                    <td>
                        <?php
                            $estrela = 0;

                            while($estrela < $rows[$cont]->qtdEstrelas){
                        ?>
                            <img alt="" src="imagens/promocoes/estrela.png">
                        <?php

                                $estrela++;
                            }

                        ?>
                    </td>
                    <td>
                        <?php echo($rows[$cont]->tipoEstadia); ?>
                    </td>
                    <td>
                        <img title="Editar hotel" draggable="false" class="imgOpcao" alt="" src="imagens/perfilparceiro/edit.png">
                        <a href="router.php?controller=hotel&modo=deletar&idHotel=<?php echo($rows[$cont]->idHotel) ?>&idParceiro=<?php echo($_GET['idParceiro']); ?>"><img title="Excluir hotel" draggable="false" class="imgOpcao" alt="" src="imagens/perfilparceiro/delete.png"></a>
                    </td>
                </tr>
                <?php
                        $cont++;
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
