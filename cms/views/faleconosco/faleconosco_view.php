<?php
    $msg = '';
    if(isset($_GET['ok']))
    {
        $msg = 'Registro excluído com sucesso.';
    }
    if(isset($_GET['erro']))
    {
        $msg = 'Ocorreu um erro na exclusão do registro. Tente novamente';
    }
 ?>
<div id="conteudo">
    <div id="msg"><?php echo ($msg); ?></div>
    <div id="abas">
        <button type="button" onclick="abrirGeral()">Geral</button>
        <button type="button" onclick="abrirConta()">Conta</button>
        <button type="button" onclick="abrirReservas()">Reservas</button>
        <button type="button" onclick="abrirFeedback()">Feedback</button>
    </div>
    <div id="tableBox">
        <table id="geral" class="sortable">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Mensagem</th>
                <th>Opções</th>
            </tr>
            <?php
                //Inclusão do arquivo controller para fazer o SELECT.
                require_once('controllers/faleconosco_controller.php');

                /*Instância do objeto da controller e chamada para metódo de listagem
                dos registros*/
                $controller_faleconosco = new ControllerFaleConosco();
                $rowsGeral = $controller_faleconosco -> ListarGeral();

                $cont = 0;
                while($cont < count($rowsGeral))
                {
             ?>
            <tr>
                <td><?php echo($rowsGeral[$cont]->nome); ?></td>
                <td><?php echo($rowsGeral[$cont]->email); ?></td>
                <td><?php echo($rowsGeral[$cont]->telefone); ?></td>
                <td><?php echo($rowsGeral[$cont]->mensagem); ?></td>
                <td>
                    <a href=<?php echo("router.php?controller=faleconosco&modo=visualizar&idFormulario=".$rowsGeral[$cont]->idFormulario); ?>><img src="imagens/find.png" alt="Editar"></a>
                    <a href=<?php echo ("router.php?controller=faleconosco&modo=excluir&idFormulario=".$rowsGeral[$cont]->idFormulario); ?>><img src="imagens/delete.png" alt="Excluir"></a>
                </td>
            </tr>
            <?php
                $cont += 1;
                }
             ?>
        </table>
        <table id="conta" class="sortable">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Mensagem</th>
                <th>Opções</th>
            </tr>
            <?php
                //Inclusão do arquivo controller para fazer o SELECT.
                require_once('controllers/faleconosco_controller.php');

                /*Instância do objeto da controller e chamada para metódo de listagem
                dos registros*/
                $controller_faleconosco = new ControllerFaleConosco();
                $rowsGeral = $controller_faleconosco -> ListarConta();

                $cont = 0;
                while($cont < count($rowsGeral))
                {
             ?>
            <tr>
                <td><?php echo($rowsGeral[$cont]->nome); ?></td>
                <td><?php echo($rowsGeral[$cont]->email); ?></td>
                <td><?php echo($rowsGeral[$cont]->telefone); ?></td>
                <td><?php echo($rowsGeral[$cont]->mensagem); ?></td>
                <td>
                    <a href=<?php echo("router.php?controller=faleconosco&modo=visualizar&idFormulario=".$rowsGeral[$cont]->idFormulario); ?>><img src="imagens/find.png" alt="Editar"></a>
                    <a href=<?php echo ("router.php?controller=faleconosco&modo=excluir&idFormulario=".$rowsGeral[$cont]->idFormulario); ?>><img src="imagens/delete.png" alt="Excluir"></a>
                </td>
            </tr>
            <?php
                $cont += 1;
                }
             ?>
        </table>
        <table id="reservas" class="sortable">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Mensagem</th>
                <th>Opções</th>
            </tr>
            <?php
                //Inclusão do arquivo controller para fazer o SELECT.
                require_once('controllers/faleconosco_controller.php');

                /*Instância do objeto da controller e chamada para metódo de listagem
                dos registros*/
                $controller_faleconosco = new ControllerFaleConosco();
                $rowsGeral = $controller_faleconosco -> ListarReservas();

                $cont = 0;
                while($cont < count($rowsGeral))
                {
             ?>
            <tr>
                <td><?php echo($rowsGeral[$cont]->nome); ?></td>
                <td><?php echo($rowsGeral[$cont]->email); ?></td>
                <td><?php echo($rowsGeral[$cont]->telefone); ?></td>
                <td><?php echo($rowsGeral[$cont]->mensagem); ?></td>
                <td>
                    <a href=<?php echo("router.php?controller=faleconosco&modo=visualizar&idFormulario=".$rowsGeral[$cont]->idFormulario); ?>><img src="imagens/find.png" alt="Editar"></a>
                    <a href=<?php echo ("router.php?controller=faleconosco&modo=excluir&idFormulario=".$rowsGeral[$cont]->idFormulario); ?>><img src="imagens/delete.png" alt="Excluir"></a>
                </td>
            </tr>
            <?php
                $cont += 1;
                }
             ?>
        </table>
        <table id="feedback" class="sortable">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Mensagem</th>
                <th>Opções</th>
            </tr>
            <?php
                //Inclusão do arquivo controller para fazer o SELECT.
                require_once('controllers/faleconosco_controller.php');

                /*Instância do objeto da controller e chamada para metódo de listagem
                dos registros*/
                $controller_faleconosco = new ControllerFaleConosco();
                $rowsGeral = $controller_faleconosco -> ListarFeedback();

                $cont = 0;
                while($cont < count($rowsGeral))
                {
             ?>
            <tr>
                <td><?php echo($rowsGeral[$cont]->nome); ?></td>
                <td><?php echo($rowsGeral[$cont]->email); ?></td>
                <td><?php echo($rowsGeral[$cont]->telefone); ?></td>
                <td><?php echo($rowsGeral[$cont]->mensagem); ?></td>
                <td>
                    <a href=<?php echo("router.php?controller=faleconosco&modo=visualizar&idFormulario=".$rowsGeral[$cont]->idFormulario); ?>><img src="imagens/find.png" alt="Editar"></a>
                    <a href=<?php echo ("router.php?controller=faleconosco&modo=excluir&idFormulario=".$rowsGeral[$cont]->idFormulario); ?>><img src="imagens/delete.png" alt="Excluir"></a>
                </td>
            </tr>
            <?php
                $cont += 1;
                }
             ?>
        </table>
    </div>
</div>
