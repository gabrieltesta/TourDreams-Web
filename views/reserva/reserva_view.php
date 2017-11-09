<?php
    //Recebe as datas para completar os valores padrões de seleção de dia/mês
    date_default_timezone_set('America/Sao_Paulo');
    $dataInicio = date('d/m/Y', time());                                        //Recebe o dia atual
    $dataFim = date('d/m/Y', strtotime("+1 day"));                              //Recebe o dia seguinte
    $mesAtual = date('m/Y', time());                                            //Recebe o mês atual
 ?>
<form action="router.php?controller=reserva" method="post">
<section>
    <?php
        $msg = '';
        require_once('controllers/reserva_controller.php');
        $reserva_controller = new ControllerReserva();
        $row = $reserva_controller->ListarQuarto($_SESSION['idQuarto']);

        $valorDiarioFormatado = number_format($row->valorDiario,2,","," ");

        $msg = '';

        if(isset($_GET['datainvalida'])){
            $msg = "Data inválida!";
        }


    ?>
    <!--Formulário de reserva-->
    <div id="formBox">
        <span>Conclua sua reserva, Nome Sobrenome <a href="#">(trocar usuário)</a></span>
        <p><?php echo($msg); ?></p>
        <table id="formularioReserva">
            <tr>

                <td><input type="hidden" name="txtValorDiario" value="<?php echo($row->valorDiario); ?>"><input type="hidden" name="txtIdQuarto" value="<?php echo($_SESSION['idQuarto']); ?>"><input type="hidden" name="txtIdCliente" value="<?php echo($_SESSION['idCliente']); ?>"><label for="dataEntrada">Data de entrada*</label></td>
            </tr>
            <tr>
                <td><input type="text" name="dataEntrada" value="<?php echo($dataInicio); ?>" class="datepicker" required></td>
            </tr>
            <tr>
                <td><label for="dataSaida">Data de saída*</label></td>
            </tr>
            <tr>
                <td><input type="text" name="dataSaida" value="<?php echo($dataFim); ?>" class="datepicker"  required></td>
            </tr>

        </table>
        <hr>
        <table id="formularioCartao">
            <tr>
                <td><label for="txtTitular">Nome do titular (Igual ao cartão)*</label></td>
            </tr>
            <tr>
                <td><input onkeyup="validar(this,'text');" type="text" maxlength="30" name="txtTitular" required class="txtLongo"></td>
            </tr>
            <tr>
                <td><label style="float:left;margin-right:5px;" for="txtNumero">Número do cartão*</label></td>
            </tr>
            <tr>
                <td><input type="text" name="txtNumero"  required  class="txtLongo"></td>
            </tr>
            <tr>
                <td><label for="txtCodigo">Código de segurança*</label></td>
            </tr>
            <tr>
                <td><input type="text" name="txtCodigo"  required id="txtCodigo"></td>
            </tr>
            <tr>
                <td><label for="txtValidade">Validade do cartão*</label></td>
            </tr>
            <tr>
                <td><input type="text" name="txtValidade" class="monthPicker" value="<?php echo($mesAtual); ?>" required></td>
            </tr>
        </table>
    </div>
    <!---->
    <!--Caixa lateral de informações-->
    <div id="dadosBox">

        <div id="imgQuarto">
            <img src="<?php echo($row->caminhoImagem); ?>" alt="Quarto">
        </div>
        <table>
            <tr>
                <td colspan="2"><span class="raleway"><?php echo($row->nomeQuarto); ?></span></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo($row->nomeHotel); ?></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo($row->logradouro); ?> n°<?php echo($row->numero); ?>, <?php echo($row->bairro); ?></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo($row->cidade); ?>-<?php echo($row->uf); ?></td>
            </tr>
            <tr>
                <td>Check-in: <?php echo($row->checkin); ?></td>
                <td>Check-out: <?php echo($row->checkout); ?></td>
            </tr>
            <tr>
                <td colspan="2">Qtd. máxima de hóspedes: <?php echo($row->maxHospedes); ?></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2"><span class="raleway">Milhas Travel Fidelidade</span></td>
            </tr>
            <tr>
                <td colspan="2">Você tem: <span>100</span> pontos</td>
            </tr>
            <tr>
                <td colspan="2"><input type="radio" name="radDesconto" value="0" checked><label for="radDesconto">0 pontos (0% de desconto)</label></td>
            </tr>
            <tr>
                <td colspan="2"><input type="radio" name="radDesconto" value="500"><label for="radDesconto">500 pontos (5% de desconto)</label></td>
            </tr>
            <tr>
                <td colspan="2"><input type="radio" name="radDesconto" value="750"><label for="radDesconto">750 pontos (7.5% de desconto)</label></td>
            </tr>
            <tr>
                <td colspan="2"><input type="radio" name="radDesconto" value="1000"><label for="radDesconto">1000 pontos (10% de desconto)</label></td>
            </tr>
            <tr>
                <td colspan="2"><input type="radio" name="radDesconto" value="2000"><label for="radDesconto">2000 pontos (25% de desconto)</label></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2">Sub-total: R$ 500,00</td>
            </tr>
            <tr>
                <td colspan="2">Taxas: R$ 50,00</td>
            </tr>
            <tr>
                <td colspan="2">Descontos: R$ 0,00</td>
            </tr>
            <tr>
                <td colspan="2"><span>Total: R$ <?php echo($valorDiarioFormatado); ?></span></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="btnReservar" value="RESERVAR"></td>
            </tr>
        </table>
    </div>
    <!---->
</section>
</form>
