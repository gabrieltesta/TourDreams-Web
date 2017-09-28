<?php
    if($_SESSION['login'] != 'true')
    {
        header('location: homepage.php');
    }
    //Inclusão do arquivo controller para fazer o SELECT.
    require_once('controllers/usuarios_controller.php');

    /*Instância do objeto da controller e chamada para metódo de listagem
    dos registros*/
    $controller_usuario = new ControllerUsuario();
    $usuario = $controller_usuario -> Buscar($_SESSION['idLogin']);

?>
<section>
    <!--Caixa de conteúdo-->
    <div id="perfilBox">
        <div id="conteudoEsquerdo">
            <!--Dados do perfil-->
            <div id="dadosPerfil">
                <div id="imagem" onclick="abrirModalEditar()">
                    <img src="<?php echo($_SESSION['img']); ?>" alt="Imagem do Usuário"/>
                    <div>TROCAR IMAGEM</div>
                </div>
                <table>
                    <tr>
                        <th>
                            <?php echo ($usuario->nome); ?> <img src="imagens/perfilusuario/edit.ico" alt="Editar Perfil" onclick="abrirModalEditar()"><img src="imagens/perfilusuario/delete.png" alt="Excluir Conta" onclick="abrirModalExcluir()"><a href="router.php?controller=deslogar"><img src="imagens/perfilusuario/logout.png" alt="Fazer Logout"></a>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <?php echo ($usuario->email) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Procura viajar para: <?php echo ($usuario->tipoLocal); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tem viajado para: campo
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Você possui <span><?php echo ($usuario->milhasPontuacao); ?></span> pontos Milhas Travel Fidelidade
                        </td>
                    </tr>
                </table>
            </div>
            <!---->
            <!--Histórico de transações-->
            <div id="historicoBox">
                <table class="sortable">
                    <tr>
                        <th>Hotel</th>
                        <th>Data Início</th>
                        <th>Data Término</th>
                        <th>Preço</th>
                        <th>Plataforma</th>
                    </tr>
                    <?php
                        $i = 0;
                        while ($i < 25)
                        {
                     ?>
                    <tr>
                        <td>Exemplo</td>
                        <td>13/09/2017</td>
                        <td>14/09/2017</td>
                        <td>R$ 550,00</td>
                        <td>Site</td>
                    </tr>
                    <?php
                        $i += 1;
                        }
                     ?>
                </table>
            </div>
            <!---->
        </div>
        <!--Última viagem-->
        <div id="conteudoDireito">
            <div id="ultimaViagem"><span>Sua última viagem</span></div>
            <div id="imagemUltimaViagem"><img src="imagens/perfilusuario/hotel.jpeg" alt="Última viagem"></div>
            <div id="nomeHotel"><span>Hotel Exemplo</span></div>
            <div id="estrelas">
            <?php
                $qtd = rand(1, 5);
                $cont = 1;
                while ($cont <= $qtd)
                {
                    ?>
                        <img src="imagens/busca/estrela.png" alt="">
                    <?php
                    $cont += 1;
                }
             ?>
            </div>
            <table>
                <tr>
                    <td>Bairro exemplo, Cidade Exemplo-EX</td>
                </tr>
                <tr>
                    <td>Parceiro Exemplo</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Data de Início: 13/09/2017</td>
                </tr>
                <tr>
                    <td>Data de Saída: 14/09/2017</td>
                </tr>
                <tr>
                    <td>Valor: R$ 550,00</td>
                </tr>
            </table>
        </div>
        <!---->
    </div>
    <!---->
    <div id="modalExcluir">
        <div id="cabecalhoModalExcluir">
            Deseja mesmo excluir sua conta?
        </div>
        <table>
            <tr>
                <td colspan="2">
                    <p>
                        Esse processo não pode ser desfeito.
                    </p>
                </td>
            </tr>
            <form action="router.php?controller=usuario&modo=excluir&idLogin=<?php echo($_SESSION['idLogin']) ?>" method="post">
            <tr>
                <td>
                    <input type="submit" name="btnExcluir" value="Sim">
                </td>
                <td>
                    <input type="button" onclick="fecharModalExcluir()" value="Não">
                </td>
            </tr>
            </form>
        </table>
    </div>
    <div id="modalEditar">
        <form action="router.php?controller=usuario&modo=editar&idLogin=<?php echo($_SESSION['idLogin']) ?>" method="post" enctype="multipart/form-data">
        <div id="conteudoModalEditar">
            <table>
                <tr>
                    <td>
                        <label>Nome</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="txtNome" value="<?php echo($usuario->nome) ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" name="txtEmail" value="<?php echo($usuario->email); ?>" required>
                    </td>
                </tr>
                <?php
                    if($usuario->rg == '')
                    {
                        ?>
                        <tr><td><label>CPF</label></td></tr>
                        <tr><td><input type="text" name="txtCpf" value="<?php echo($usuario->cpf); ?>" required></td></tr>
                        <?php
                    }
                    else
                    {
                        ?>
                        <tr><td><label>RG</label></td></tr>
                        <tr><td><input type="text" name="txtRg" value="<?php echo($usuario->rg); ?>" required></td></tr>
                        <?php
                    }
                 ?>
                 <tr>
                     <td>
                         <label>Telefone</label>
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <input type="tel" name="txtTelefone" value="<?php echo($usuario->telefone); ?>" required>
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label>Local que procura frequentemente</label>
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <select name="slcTipoLocal" required>
                             <?php
                                $sql = "SELECT * FROM tbl_tipodelocal WHERE idTipoDeLocal <> 1";
                                $select = mysql_query($sql);
                                while($rows=mysql_fetch_array($select))
                                {
                                    ?>
                                    <option value="<?php echo($rows['idTipoDeLocal']) ?>"><?php echo ($rows['TipoDeLocal']) ?></option>
                                    <?php
                                }

                             ?>
                         </select>
                     </td>
                 </tr>
            </table>
        </div>
        <div id="imgBox">
            <table>
                <tr>
                    <td colspan="2">
                        <img src="<?php echo($_SESSION['img']) ?>" alt="Usuário">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="file" name="filImg">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="button" onclick="fecharModalEditar()" value="Cancelar">
                    </td>
                    <td>
                        <input type="submit" name="btnEditarUsuario" value="Editar">
                    </td>
                </tr>
            </table>
        </div>
        </form>
    </div>
</section>
