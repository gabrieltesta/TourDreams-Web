<div id="selectgp">
     <p id ="titulogp"> Gerenciamento de Parceiros</p>

    <table class="table1 sortable">
        <tr>
                <td class="titulo2">
                        N de identificação
                </td>
                <td class="titulo2">
                        CNPJ
                </td>
                <td class="titulo2" >
                        Nome Parceiro
                </td>
                <td class="titulo2" >
                        Login
                </td>
        </tr>

    <?php

        require_once('controllers/parceiros_controller.php');

        $controller_parceiro = new ControllerParceiro();
        $rows = $controller_parceiro -> Listar();

        $cont = 0;

        while ($cont < count($rows)) {

    ?>
        <tr>
            <td class="tdnumero">
                <?php echo($rows[$cont]->idParceiro); ?>
            </td>
             <td class="tdnumero">
                <?php echo($rows[$cont]->cnpj); ?>
            </td>
             <td class="tdnumero">
                <?php echo($rows[$cont]->nome); ?>
            </td>
             <td class="tdnumero">
                <?php echo($rows[$cont]->idLogin); ?>
            </td>
        </tr>

    <?php
    $cont +=1;
       }
    ?>
    </table>
</div>
