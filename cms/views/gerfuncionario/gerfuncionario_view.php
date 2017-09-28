<?php

    $idFuncionario = "";
    $nome = "";
    $email = "";
    $cpf = "";
    $rg = "";
    $action = "inserir";



?>

<div class="bgModalFuncionario">
    <div class="caixaFormulario">
        <div class="headerModal">
            <h1>Cadastro de Funcionário</h1><h2 onclick="fecharModalFuncionarios()">X</h2>
        </div>
        <div class="divFormulario">
            <form name="frmCadastroFunionario" class="frmCadastroFunionario" action="router.php?controller=funcionario&modo=<?php echo($action); ?>" method="post">
                <table>
                    <tr>
                        <td><label>Login</label></td>
                    </tr>
                    <tr>
                        <td><input placeholder="Digite seu Login" type="text" name="txtLogin" value=""></td>
                    </tr>
                    <tr>
                        <td><label>Senha</label></td>
                    </tr>
                    <tr>
                        <td><input placeholder="Digite sua senha" type="password" name="txtSenha" value=""></td>
                    </tr>
                    <tr>
                        <td><label>Nome</label></td>
                    </tr>
                    <tr>
                        <td><input placeholder="Ex.: Seu Nome" type="text" name="txtNome" value=""></td>
                    </tr>
                    <tr>
                        <td><label>Email</label></td>
                    </tr>
                    <tr>
                        <td><input placeholder="Ex.: seuemail@email.com" type="email" name="txtEmail" value=""></td>
                    </tr>
                    <tr>
                        <td><label>CPF</label></td>
                    </tr>
                    <tr>
                        <td><input placeholder="Ex.: 000.000.000-00" type="text" name="txtCPF" value=""></td>
                    </tr>
                    <tr>
                        <td><label>RG</label></td>
                    </tr>
                    <tr>
                        <td><input placeholder="Ex.: 00.000.000-0" type="text" name="txtRG" value=""></td>
                    </tr>
                    <tr>
                        <td><label>Nível de funcionário</label></td>
                    </tr>
                    <tr>
                        <td>
                            <select class="sltNivel" name="sltNivel">
                                <option value="1">Admnistrador</option>
                                <option value="2">Marketing</option>
                                <option value="3">Reservas</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Imagem de Perfil</label></td>
                    </tr>
                    <tr>
                        <td><input type="file" name="fileFoto"></td>
                    </tr>

                    <tr>
                        <td><input type="submit" name="btn"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>


<div class="sectionfuncionario">
    <div id="titulo">
        Gerenciamento de Funcionários
    </div>
    <div id="buscaFuncionario">
        <input placeholder="Buscar funcionário" type="text" name="bscFuncionario">
        <div id="btnBusca">

        </div>
    </div>
    <div class ="boxdetalhes">
     <table>
        <tr>
            <td class="td_titulos">
                Imagem

            </td>
            <td class="td_titulos">
                Nome

            </td>
            <td class="td_titulos">
                CPF

            </td>
            <td class="td_titulos">
                RG

            </td>
            <td class="td_titulos">
                Email

            </td>
            <td class="td_titulos">
                Nível

            </td>
             <td class="td_titulos" >
                       Opções
            </td>

        </tr>
        <?php
        $i = 0;

    while($i < 9){

    ?>
             <tr>
                 <td class="img">
                    <img src="imagens/gfuncionarios/mulher2.jpg" >
                 </td>
                 <td class="tdcontas">
                     Maria Eduarda
                 </td>
                 <td class="tdcontas">
                     476.598.246-24
                 </td>
                 <td class="tdcontas">
                     59.658.3698-8
                 </td>
                 <td class="tdcontas">
                     mariaduda@gmail.com
                 </td>
                 <td class="tdcontas">
                     Reservas
                 </td>
                 <td class="tdcontas">
                    <a href="#"><img src="imagens/edit.png"></a>
                     <a href="#"><img src="imagens/delete.png"></a>
                 </td>
            </tr>

        <?php
        $i++;
        }
    ?>
        </table>
    </div>

    <div id="btnCadastrar" onclick="abrirModalFuncionarios()">
        <h1>Cadastrar Funcionário</h1>
    </div>


</div>
