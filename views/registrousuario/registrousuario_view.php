<?php

  if(isset($_GET['ok']))


 ?>
<section>
    <!--Mensagem de efeito lateral-->
    <div id="registroMsgBox">
        <div id="registroMsg">
            <h1>Reserve o Hotel perfeito</h1>
            <span>Crie sua conta e tenha acesso ao nosso Portal de Negócios de Viagens.</span>
        </div>
    </div>
    <!---->
    <!--Caixa de registro-->
    <div id="registroBox">
        <div id="registro">
            <!--Seleção de registro-->
            <div id="btnRegistroBox">
                <div class="btnRegistro" onclick="abrirRegistroUsuario()">
                    <span>QUERO RESERVAR</span>
                </div>
                <div class="btnRegistro" style="margin-top: 50px;"  onclick="abrirRegistroParceiro()">
                    <span>QUERO PUBLICAR</span>
                </div>
            </div>
            <!---->
            <!--Registro de usuário-->
            <form action="router.php?controller=registro" method="post">
            <table id="tblRegistroUsuario1">
                <tr>
                    <td><label for="txtLogin">Login*</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="txtLogin" required id="txtLogin"></td>
                </tr>
                <tr>
                    <td><label for="txtSenha">Senha*</label></td>
                </tr>
                <tr>
                    <td><input type="password" name="txtSenha" required id="txtSenha"></td>
                </tr>
                <tr>
                    <td><label for="txtNome">Nome Completo*</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="txtNome" required id="txtNome"></td>
                </tr>
                <tr>
                    <td><div class="btnRegistroPassos" onclick="abrirRegistroUsuario2()"><span>CONTINUAR</span></div></td>
                </tr>
            </table>
            <table id="tblRegistroUsuario2">
                <tr>
                    <td><label for="txtEmail">Email*</label></td>
                </tr>
                <tr>
                    <td><input type="email" name="txtEmail" required id="txtEmail"></td>
                </tr>
                <tr>
                    <td>Selecione um: </td>
                </tr>
                <tr>
                    <td><input type="radio" name="radDoc" value="cpf" id="radCpf" checked onclick="abrirCPF()"><label for="radDoc">CPF</label></td>
                </tr>
                <tr>
                    <td><input type="radio" name="radDoc" value="rg" id="radRg" onclick="abrirRG()"><label for="radDoc">RG</label></td>
                </tr>
                <tr>
                    <td><label for="txtRg" class="txtRg">RG*</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="txtRg" class="txtRg" id="txtRg"></td>
                </tr>
                <tr>
                    <td><label for="txtCpf" class="txtCpf">CPF*</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="txtCpf" class="txtCpf" id="txtCpf"></td>
                </tr>
                <tr>
                    <td><label for="txtCelular">Celular*</label></td>
                </tr>
                <tr>
                    <td><input type="tel" name="txtCelular" required id="txtCelular"></td>
                </tr>
                <tr>
                    <td><div class="btnRegistroPassos" onclick="abrirRegistroUsuario3()"><span>QUASE LÁ!</span></div></td>
                </tr>
            </table>
            <table id="tblRegistroUsuario3">
                <tr>
                    <td>Qual o seu local preferido de viagem?*</td>
                </tr>
                <tr>
                    <td><input type="radio" name="radLocal" value="campo" checked><label for="radLocal">Campo</label></td>
                </tr>
                <tr>
                    <td><input type="radio" name="radLocal" value="litoral"><label for="radLocal">Litoral</label></td>
                </tr>
                <tr>
                    <td><input type="radio" name="radLocal" value="montanhas"><label for="radLocal">Montanhas</label></td>
                </tr>
                <tr>
                    <td><span>Ao registrar aceito aos <a href="#">termos e condições de uso</a>.</span></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnRegistrarUsuario" value="REGISTRAR-SE" class="btnRegistroPassos"></td>
                </tr>
            </table>
            </form>
            <!---->
            <!--Registro de parceiro-->
            <form action="router.php?controller=parceiro&modo=inserir" method="post">
                <table id="tblRegistroParceiro1">
                    <tr>
                        <td><label for="txtLogin">Login*</label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="txtLogin" required id="txtLoginParceiro"></td>
                    </tr>
                    <tr>
                        <td><label for="txtSenhaParceiro">Senha*</label></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="txtSenha" required id="txtSenhaParceiro"></td>
                    </tr>
                    <tr>
                        <td><label for="txtNome">Nome*</label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="txtNome" required id="txtNomeParceiro"></td>
                    </tr>
                    <tr>
                        <td><div class="btnRegistroPassos" onclick="abrirRegistroParceiro2()"><span>CONTINUAR</span></div></td>
                    </tr>
                </table>
                <table id="tblRegistroParceiro2">
                    <tr>
                        <td><label for="txtEmail">Email*</label></td>
                    </tr>
                    <tr>
                        <td><input type="email" name="txtEmail" required id="txtEmailParceiro"></td>
                    </tr>
                    <tr>
                        <td><label for="txtCnpj">CNPJ*</label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="txtCnpj" required id="txtCnpj"></td>
                    </tr>
                    <tr>
                        <td><label for="txtCelular">Telefone*</label></td>
                    </tr>
                    <tr>
                        <td><input type="tel" name="txtTelefone" required id="txtTelefone"></td>
                    </tr>
                    <tr>
                        <td><div class="btnRegistroPassos" onclick="abrirRegistroParceiro3()"><span>QUASE LÁ!</span></div></td>
                    </tr>
                </table>
                <table id="tblRegistroParceiro3">
                    <tr>
                        <td>ATENÇÃO</td>
                    </tr>
                    <tr>
                        <td>Será adicionado uma taxa de 10% do valor de todas as diárias automaticamente.</td>
                    </tr>
                    <tr>
                        <td><span>Ao registrar aceito aos <a href="#">termos e condições de uso</a>.</span></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="btnRegistrarUsuario" value="REGISTRAR-SE" class="btnRegistroPassos"></td>
                    </tr>
                </table>
            </form>
            <!---->
        </div>
    </div>
    <!---->
</section>
